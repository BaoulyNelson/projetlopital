@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Prescription</h1>
    <div class="card">
        <div class="card-header">
            <h2>Prescription pour la Consultation #{{ $prescription->idconsultation }}</h2>
        </div>
        <div class="card-body">
            <p><strong>ID Consultation:</strong> {{ $prescription->idconsultation }}</p>
            <p><strong>Prescription:</strong> {{ $prescription->prescription }}</p>
        </div>
    </div>
    <a href="{{ route('prescriptions.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection
