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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $etudiant->id }}</td>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->email }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('etudiant.edit', $etudiant->id)}}">Modifier</a></li>
                                    </td>
                                    <td>
                                        <form action="{{ route('etudiant.delete', $etudiant->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="Effacer">
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







