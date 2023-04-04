@extends('layouts.forum')
@section('title', 'Forum')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-7">
                    @lang('lang.create_post')
                </h1>
            </div>
        </div>
    </div>
    <hr>

    <div class="container mb-5">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
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
                <input value="{{ old('title') }}" type="text" class="form-control" name="title" id="title"
                    placeholder=" @lang('lang.title')">

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
                <textarea value="{{ old('content') }}" class="form-control" name="content" id="content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4"> @lang('lang.publish')</button>
        </form>
    </div>

@endsection
