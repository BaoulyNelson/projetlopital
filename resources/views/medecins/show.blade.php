@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Médecin</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $medecin->nom }} {{ $medecin->prenom }}</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $medecin->id }}</p>
            <p><strong>Nom:</strong> {{ $medecin->nom }}</p>
            <p><strong>Prénom:</strong> {{ $medecin->prenom }}</p>
            <p><strong>Sexe:</strong> {{ $medecin->sexe }}</p>
            <p><strong>Telephone:</strong> {{ $medecin->tel }}</p>
            <p><strong>Adresse:</strong> {{ $medecin->adresse }}</p>
            <p><strong>Email:</strong> {{ $medecin->email }}</p>
            <p><strong>Spécialité:</strong> {{ $medecin->specialite }}</p>
        </div>
    </div>
    <a href="{{ route('medecins.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection
