@extends('layouts.app')
@section('title', 'étudiant')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-7">
                    @lang('lang.register_user')
                </h1>
            </div>
            <!--/col-12-->
        </div>
        <!--/row-->
        <hr>
        <form action="{{ route('etudiant.store') }}" method="post">
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

            <!-- Toggle switch -->
            <div class="form-check form-switch mb-4">
                <label class="form-check-label" for="is_admin">Créer un compte admin
                    <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin" value="0">
                </label>
            </div>

            <!-- Text input -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name') }}" />
                        <label class="form-label" for="name">Nom complet</label>
                    </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
                <label class="form-label" for="email">Adresse courriel</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" />
                <label class="form-label" for="password">Mot de passe</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                <label class="form-label" for="password_confirmation">Confirmation du mot de passe</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}" />
                <label class="form-label" for="adresse">Addresse</label>
            </div>

            <!-- Date input -->
            <div class="form-outline mb-4">
                <input type="date" name="anniversary" id="anniversary" class="form-control"
                    value="{{ old('anniversary') }}" />
                <label class="form-label" for="anniversary">Date d'anniversaire</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <select id="ville_id" name="ville_id" class="form-select">
                    <option value="" disabled selected>Sélectionner la ville</option>
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="telephone" id="telephone" class="form-control"
                    value="{{ old('telephone') }} " />
                <label class="form-label" for="telephone">Téléphone</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Confirmer</button>
        </form>
    </div>
    <script>
        const adminToggle = document.getElementById('is_admin');

        adminToggle.addEventListener('change', function() {
            if (adminToggle.checked) {
                adminToggle.value = 1;
                console.log(adminToggle.value);
            } else {
                adminToggle.value = 0;
                console.log(adminToggle.value);
            }
        });
    </script>

@endsection
