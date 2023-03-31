<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Etudiant;
use App\Models\User;
use App\Models\Ville;


class ForumController extends Controller
{

    public function index()
    {
        return view('forum.index');
    }
}
