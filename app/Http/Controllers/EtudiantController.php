<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function etudiantsIndex()
    {
        // Get all the etudiants from the database
        $etudiants = Etudiant::all();

        // Return a view with the etudiants data
        return view('etudiants', ['etudiants' => $etudiants]);
    }
}
