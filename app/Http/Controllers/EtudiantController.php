<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::paginate(25);
        return view('etudiant.etudiants', ['etudiants' => $etudiants]);
    }

        public function show(Etudiant $etudiant)
    {   
        return view('etudiant.edit', ['etudiant' => $etudiant]);
    }
    
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', ['villes' => $villes, 'etudiant' => $etudiant]);
    }

    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create', ['villes' => $villes]);
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone'  => $request->telephone,
            'email' => $request->email,
            'ville_id' => $request->ville_id,
            'anniversary' => $request->anniversary,
        ]);

        return redirect(route('blog.edit', $etudiant->id))->withSuccess('Article mis à jour avec success');
    }

    public function store(Request $request)
    {
        Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone'  => $request->telephone,
            'email' => $request->email,
            'ville_id' => $request->ville_id,
            'anniversary' => $request->anniversary,
        ]);
        return redirect(route('etudiant.index'));
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('etudiant.index'));
    }
}

