@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Dossier</h1>
    <div class="card">
        <div class="card-header">
            <h2>Dossier Code: {{ $dossier->code }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Code:</strong> {{ $dossier->code }}</p>
            <p><strong>ID Consultation:</strong> {{ $dossier->idconsultation }}</p>
            <p><strong>Date d'Enregistrement:</strong> {{ $dossier->date_enregistrement }}</p>
        </div>
    </div>
    <a href="{{ route('dossiers.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection
