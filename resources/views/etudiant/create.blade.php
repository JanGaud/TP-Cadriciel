@extends('layouts.app')
@section('title', 'étudiant')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-7">
                Ajout d'étudiant
            </h1>
        </div> <!--/col-12-->
    </div><!--/row-->
            <hr>
            <form  action="{{route('etudiant-create')}}" method="post">
              @csrf
              <!-- Text input -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" name="nom" id="nom" class="form-control" />
                    <label class="form-label" for="nom">Nom complet</label>
                  </div>
                </div>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="email">Adresse courriel</label>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input type="text" name="adresse" id="adresse" class="form-control" />
                <label class="form-label" for="adresse">Addresse</label>
              </div>              
              
              <!-- Number input -->
              <div class="form-outline mb-4">
              <select id="ville_id" name="ville_id" class="form-select">
                @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach
              </select>
              </div>
            
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" name="telephone" id="telephone" class="form-control" />
                <label class="form-label" for="telephone">Téléphone</label>
              </div>
            
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Confirmer</button>
            </form>
</div>
@endsection