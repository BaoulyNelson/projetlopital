@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Consultation</h1>
    <div class="card">
        <div class="card-header">
            <h2>Consultation du {{ $consultation->date_consultation }}</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $consultation->id }}</p>
            <p><strong>Médecin:</strong> {{ $consultation->medecin->nom }} {{ $consultation->medecin->prenom }}</p>
            <p><strong>Patient:</strong> {{ $consultation->patient->nom }} {{ $consultation->patient->prenom }}</p>
            <p><strong>Poids:</strong> {{ $consultation->poids }} kg</p>
            <p><strong>Hauteur:</strong> {{ $consultation->hauteur }} cm</p>
            <p><strong>Diagnostique:</strong> {{ $consultation->diagnostique }}</p>
            <p><strong>Date de Consultation:</strong> {{ $consultation->date_consultation }}</p>
        </div>
    </div>
    <a href="{{ route('consultations.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection
