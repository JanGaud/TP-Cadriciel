@extends('layouts.app')
@section('title', 'étudiant')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-7">
                    {{ $etudiant->user->name }}
                </h1>
                <p>@lang('lang.modify_user')</p>
            </div>
            <!--/col-12-->
        </div>
        <!--/row-->
        <hr>
        <form method="POST" action="{{ route('etudiant.edit', $etudiant->id) }}">
            @csrf
            @method('PUT')
            <!-- Text input -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input value="{{ $etudiant->user->name }}" placeholder="{{ $etudiant->user->name }}" type="text"
                            id="name" name="name" class="form-control" />
                        <label class="form-label" for="nom">@lang('lang.name')</label>
                    </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input value="{{ $etudiant->user->email }}" placeholder="{{ $etudiant->user->email }}" type="email"
                    id="email" name="email" class="form-control" />
                <label class="form-label" for="email">@lang('lang.email')</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input value="{{ $etudiant->adresse ?? '' }}" placeholder="{{ $etudiant->adresse }}" type="text"
                    id="adresse" name="adresse" class="form-control" required />
                <label class="form-label" for="adresse">@lang('lang.adress')</label>
            </div>

            <!-- Date input -->
            <div class="form-outline mb-4">
                <input type="date" name="anniversary" id="anniversary" class="form-control"
                    value="{{ $etudiant->anniversary }}" placeholder="{{ $etudiant->anniversary }}" />
                <label class="form-label" for="anniversary">@lang('lang.anniversary')</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <select id="ville_id" name="ville_id" class="form-select">
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id ?? '' }}" value="{{ $ville->id }}"
                            @if ($ville->id === $etudiant->ville_id) selected @endif>{{ $ville->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input value="{{ $etudiant->telephone ?? '' }}" placeholder="{{ $etudiant->telephone }}" type="text"
                    name="telephone" id="telephone" class="form-control" />
                <label class="form-label" for="telephone">@lang('lang.phone')</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">@lang('lang.modify')</button>
        </form>
    </div>
@endsection
