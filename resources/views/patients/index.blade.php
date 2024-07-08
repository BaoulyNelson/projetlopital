@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Patients</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary">Ajouter un Patient</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->nom }}</td>
                <td>{{ $patient->prenom }}</td>
                <td>{{ $patient->sexe }}</td>
                <td>{{ $patient->tel }}</td>
                <td>{{ $patient->adresse }}</td>
                <td>
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('patients.confirmDestroy', $patient->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
