@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Prescriptions</h1>
    <a href="{{ route('prescriptions.create') }}" class="btn btn-primary">Ajouter une Prescription</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Consultation</th>
                <th>Prescription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prescriptions as $prescription)
            <tr>
                <td>{{ $prescription->idconsultation }}</td>
                <td>{{ $prescription->prescription }}</td>
                <td>
                    <a href="{{ route('prescriptions.show', $prescription->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('prescriptions.edit', $prescription->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('prescriptions.destroy', $prescription->id) }}" method="POST" style="display:inline;">
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
