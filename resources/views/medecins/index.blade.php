@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Médecins</h1>
    <a href="{{ route('medecins.create') }}" class="btn btn-primary">Ajouter un Médecin</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medecins as $medecin)
            <tr>
                <td>{{ $medecin->id }}</td>
                <td>{{ $medecin->nom }}</td>
                <td>{{ $medecin->prenom }}</td>
                <td>{{ $medecin->sexe }}</td>
                <td>{{ $medecin->tel }}</td>
                <td>{{ $medecin->adresse }}</td>
                <td>{{ $medecin->email }}</td>
                <td>{{ $medecin->specialite }}</td>
                <td>
                    <a href="{{ route('medecins.show', $medecin->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('medecins.edit', $medecin->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('medecins.destroy', $medecin->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
