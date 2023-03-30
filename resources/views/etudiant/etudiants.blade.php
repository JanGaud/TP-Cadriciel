@extends('layouts.app')
@section('title', 'liste étudiants')
@section('content')

    <section>
        <div class="container m-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="primary-color">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etudiants as $etudiant)
                                    <tr>
                                        <td class="text-center">{{ $etudiant->id }}</td>
                                        <td class="text-center">{{ $etudiant->user->name }}</td>
                                        <td class="text-center">{{ $etudiant->user->email }}</td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                                href="{{ route('etudiant.edit', $etudiant->id) }}">Modifier</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-outline-danger" value="Effacer">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">{{ $etudiants->links() }}</div>
    </section>

@endsection
