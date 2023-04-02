@extends('layouts.forum')
@section('title', 'Article')
@section('content')

    <div class="container m-5">
        <div class="card text-center">
            <div class="card-header">
                {{ $post->user->name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="#" class="btn btn-primary">{{ $post->category->title }}</a>
            </div>
            <div class="card-footer text-muted">
                Publié le {{ $post->created_at->format('F jS, Y') }}
            </div>
        </div>
    </div>
@endsection
