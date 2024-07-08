@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Médecins</h1>
    <a href="{{ route('medecins.create') }}" class="btn btn-primary">Ajouter un Médecin</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medecins as $medecin)
            <tr>
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
                    <a href="{{ route('medecins.confirmDestroy', $medecin->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
