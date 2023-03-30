@extends('layouts.app')
@section('title', 'connexion')
@section('content')

    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
        <label for="email" class="sr-only">
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse courriel" required=""
                autofocus=""></label>
        <label for="password" class="sr-only">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""></label>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
@endsection
