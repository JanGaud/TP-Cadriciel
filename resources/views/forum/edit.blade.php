@extends('layouts.forum')
@section('title', 'Edit')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-7">
                    Modifier votre article
                </h1>
            </div>
        </div>
    </div>
    <hr>

    <div class="container mb-5">
        <form class="article-delete" action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon-btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
        </form>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">

            </div>
            <div class="form-group">
                <label for="categories"> </label>
                <select multiple class="form-control" name="categories" id="categories">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="content">
                <label for="content"></label>
                <textarea value="{{ $post->content }}" class="form-control" name="content" id="content" rows="3">{{ $post->content }}</textarea>
            </div>
            <div class="card-modif-btn">
                <button type="submit" class="btn btn-primary btn-block mt-4">Publier</button>

            </div>

        </form>
    </div>

@endsection
