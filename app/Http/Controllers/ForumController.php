<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use App\Models\Etudiant;
// use App\Models\User;
// use App\Models\Ville;
use App\Models\Category;



class ForumController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderByDesc('created_at')->paginate(4);
        $categories = Category::all();

        return view('forum.index', ['posts' => $posts, 'categories' => $categories]);
    }

    public function profile()
    {
        return view('forum.profile');
    }
}
