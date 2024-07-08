@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Dossiers</h1>
    <a href="{{ route('dossiers.create') }}" class="btn btn-primary">Ajouter un Dossier</a>
    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>ID Consultation</th>
                <th>Date d'Enregistrement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dossiers as $dossier)
            <tr>
                <td>{{ $dossier->code }}</td>
                <td>{{ $dossier->idconsultation }}</td>
                <td>{{ $dossier->date_enregistrement }}</td>
                <td>
                    <a href="{{ route('dossiers.show', $dossier->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('dossiers.edit', $dossier->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('dossiers.confirmDestroy', $dossier->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
