<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\User;
use App\Models\Ville;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::paginate(25);
        $villes = Ville::all();
        return view('etudiant.etudiants', [
            'etudiants' => $etudiants,
            'villes' => $villes,
            'user' => auth()->user(),
        ]);
    }
    

    public function show(Etudiant $etudiant)
    {
        return view('etudiant.edit', ['etudiant' => $etudiant]);
    }

    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', [
            'etudiant' => $etudiant,
            'villes' => $villes,
            'user' => auth()->user()
        ]);
    }    

    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create', ['villes' => $villes]);
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->name = $request->input('name', $etudiant->name);
        $etudiant->email = $request->input('email', $etudiant->email);
        $etudiant->adresse = $request->input('adresse', $etudiant->adresse);
        $etudiant->anniversary = $request->input('anniversary', $etudiant->adresse);
        $etudiant->ville_id = $request->input('ville_id', $etudiant->ville_id);
        $etudiant->telephone = $request->input('telephone', $etudiant->telephone);

        $etudiant->save();

        return redirect()->route('etudiant.index', $etudiant->id)
            ->with('success', 'Etudiant mis à jour avec succès.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', 'min:7'],
            'ville_id' => 'required',
            'adresse' => 'required',
            'telephone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
            'anniversary' => ['required', 'date', 'before_or_equal:' . \Carbon\Carbon::now()->subYears(14)->format('Y-m-d')],
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),

        ]);

        // Create a new etudiant
        $ville = Ville::find($validatedData['ville_id']);
        $etudiant = Etudiant::create([
            'adresse' => $validatedData['adresse'],
            'telephone' => $validatedData['telephone'],
            'anniversary' => $validatedData['anniversary'],
            'ville_id' => $ville->id,
            'user_id' => $user->id,
        ]);

        // Associate the user with the etudiant
        $etudiant->user()->associate($user);
        $etudiant->save();
        $ville->etudiants()->save($etudiant);

        return redirect()->route('etudiant.index', $etudiant->id)
            ->with('success', 'Etudiant ajouté avec succès.');
    }


    public function destroy(Etudiant $etudiant)
    {
        $user = $etudiant->user;
        $user->delete();
        $etudiant->delete();

        return redirect(route('etudiant.index'));
    }
}
