@extends('layouts.app')
@section('title', 'liste étudiants')
@section('content')

    <section>
        <div class="m-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="primary-color">
                                <tr>
                                    <th>@lang('lang.name')</th>
                                    <th>@lang('lang.email')</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etudiants as $etudiant)
                                    <tr>
                                        <td>
                                            @if ($etudiant->user->isAdmin())
                                                <i class="fa-solid fa-crown" title="Admin"></i>&nbsp
                                            @else
                                                <i class="fa-solid fa-graduation-cap" title="Etudiant"></i>&nbsp
                                            @endif
                                            {{ $etudiant->user->name }}
                                        </td>
                                        <td>
                                            {{ $etudiant->user->email }}
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                                href="{{ route('etudiant.edit', $etudiant->id) }}">@lang('lang.update')</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-outline-danger"
                                                    value="@lang('lang.delete')">
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
