@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Consultations</h1>
    <a href="{{ route('consultations.create') }}" class="btn btn-primary">Ajouter une Consultation</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Médecin</th>
                <th>Patient</th>
                <th>Poids</th>
                <th>Hauteur</th>
                <th>Diagnostique</th>
                <th>Date de Consultation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
            <tr>
                <td>{{ $consultation->id }}</td>
                <td>{{ $consultation->medecin->nom }} {{ $consultation->medecin->prenom }}</td>
                <td>{{ $consultation->patient->nom }} {{ $consultation->patient->prenom }}</td>
                <td>{{ $consultation->poids }}</td>
                <td>{{ $consultation->hauteur }}</td>
                <td>{{ $consultation->diagnostique }}</td>
                <td>{{ $consultation->date_consultation }}</td>
                <td>
                    <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('consultations.edit', $consultation->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" style="display:inline;">
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
