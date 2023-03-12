<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('blog.etudiants', ['etudiants' => $etudiants]);
    }

        public function show(Etudiant $etudiant)
    {   
        return view('blog.show', ['Etudiant' => $etudiant]);
    }
    
    public function edit(Etudiant $etudiant)
    {
        return view('blog.edit', ['etudiant' => $etudiant]);
    }


}

