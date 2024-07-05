@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Patient</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $patient->nom }} {{ $patient->prenom }}</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $patient->id }}</p>
            <p><strong>Nom:</strong> {{ $patient->nom }}</p>
            <p><strong>Prénom:</strong> {{ $patient->prenom }}</p>
            <p><strong>Sexe:</strong> {{ $patient->sexe }}</p>
            <p><strong>Téléphone:</strong> {{ $patient->tel }}</p>
            <p><strong>Adresse:</strong> {{ $patient->adresse }}</p>
        </div>
    </div>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection
