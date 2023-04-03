<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function create()
    {
        $categories = Category::all();
        return view('forum.post', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|min:30',
            'categories' => 'required',
        ]);

        $post = new Post;
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->user_id = Auth::id();
        $post->category_id = $validatedData['categories'][0];
        $post->save();

        return redirect()->route('forum.show', ['post' => $post])->with('success', 'Post created successfully!');
    }


    public function show(Post $post)
    {
        return view('forum.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('forum.edit', ['post' => $post, 'categories' => $categories]);
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        return redirect()->route('forum.show', ['post' => $post->id])->with('success', 'Post updated successfully!');
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect()->route('forum.index')->with('success', 'Post deleted successfully.');
    }
}
