@if (isset($etudiants))
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif







