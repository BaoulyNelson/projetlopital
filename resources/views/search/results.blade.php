@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/results.css') }}">
@endpush
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/results.css') }}">
@endsection
@section('content')
<div class="results-show-container">
    <h1 class="results-show-title">Résultats de recherche</h1>

    @if (count($patients) > 0 || count($medecins) > 0 || count($consultations) > 0 || count($prescriptions) > 0 || count($dossiers) > 0)
    <div class="row">
        <div class="col-md-6">
            <h2>Patients</h2>
            <ul>
                @foreach ($patients as $patient)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $patient->nom }} {{ $patient->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Médecins</h2>
            <ul>
                @foreach ($medecins as $medecin)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $medecin->nom }} {{ $medecin->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Consultations</h2>
            <ul>
                @foreach ($consultations as $consultation)
                <li class="results-show-info">
                    <label>Patient :</label> <span>{{ $consultation->patient->nom }} {{ $consultation->patient->prenom }}</span><br>
                    <label>Médecin :</label> <span>{{ $consultation->medecin->nom }} {{ $consultation->medecin->prenom }}</span><br>
                    <label>Date :</label> <span>{{ $consultation->date }}</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Prescriptions</h2>
            <ul>
                @foreach ($prescriptions as $prescription)
                <li class="results-show-info">
                    <label>Patient :</label> <span>{{ $prescription->consultation->patient->nom }} {{ $prescription->consultation->patient->prenom }}</span><br>
                    <label>Médecin :</label> <span>{{ $prescription->consultation->medecin->nom }} {{ $prescription->consultation->medecin->prenom }}</span><br>
                    <label>Date :</label> <span>{{ $prescription->created_at }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Dossiers</h2>
            <ul>
                @foreach ($dossiers as $dossier)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $dossier->patient->nom }} {{ $dossier->patient->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @else
    <p>Aucun résultat trouvé.</p>
    @endif

    <div class="results-show-actions">
    <button onclick="javascript:history.back();">Retour</button>
    <button>Exporter</button>
</div>

</div>
@endsection