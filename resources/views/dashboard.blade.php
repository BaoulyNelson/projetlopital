@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<!-- Inclure le script externe -->
@push('scripts')
<script src="{{ asset('js/panneauDashboard.js') }}"></script>
@endpush

@endsection

@section('content')
<div class="text-right">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) { 
                    document.getElementById('logout-form').submit();
                }">
        Se déconnecter
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>


<div class="container">
    <h1>Tableau de Bord</h1>
    <div class="row">

      
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Patients</h3>
                </div>
                <div class="card-body">
                    <p>Gérez les informations des patients.</p>
                    <a href="{{ route('patients.index') }}" class="btn btn-primary">Voir les Patients</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Médecins</h3>
                </div>
                <div class="card-body">
                    <p>Gérez les informations des médecins.</p>
                    <a href="{{ route('medecins.index') }}" class="btn btn-primary">Voir les Médecins</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Consultations</h3>
                </div>
                <div class="card-body">
                    <p>Gérez les consultations des patients.</p>
                    <a href="{{ route('consultations.index') }}" class="btn btn-primary">Voir les Consultations</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Prescriptions</h3>
                </div>
                <div class="card-body">
                    <p>Gérez les prescriptions médicales.</p>
                    <a href="{{ route('prescriptions.index') }}" class="btn btn-primary">Voir les Prescriptions</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Dossiers</h3>
                </div>
                <div class="card-body">
                    <p>Gérez les dossiers des patients.</p>
                    <a href="{{ route('dossiers.index') }}" class="btn btn-primary">Voir les Dossiers</a>
                </div>
            </div>
        </div>
    </div>

</div>
@stack('scripts')
@endsection