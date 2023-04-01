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
        $posts = Post::with('category')->paginate(4);

        return view('forum.index', compact('posts'));
    }
}
