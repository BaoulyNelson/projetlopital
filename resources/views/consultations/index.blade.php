@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Consultations</h1>
    <a href="{{ route('consultations.create') }}" class="btn btn-primary">Ajouter une Consultation</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Médecin</th>
                <th>ID Patient</th>
                <th>Poids</th>
                <th>Hauteur</th>
                <th>Diagnostic</th>
                <th>Date de Consultation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
            <tr>
                <td>{{ $consultation->idmedecin }}</td>
                <td>{{ $consultation->idpatient }}</td>
                <td>{{ $consultation->poids }}</td>
                <td>{{ $consultation->hauteur }}</td>
                <td>{{ $consultation->diagnostique }}</td>
                <td>{{ $consultation->date_consultation }}</td>
                <td>
                    <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('consultations.edit', $consultation->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('consultations.confirmDestroy', $consultation->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
