@extends('layouts.app')
@section('title', 'étudiant')
@section('content')

    <div class="container">
        <div class="login-page">
            <div class="form">
                <form class="register-form">
                    <input type="text" placeholder="name" />
                    <input type="password" placeholder="password" />
                    <input type="text" placeholder="email address" />
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>

@endsection
