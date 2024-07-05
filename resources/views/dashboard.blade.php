@extends('layouts.app')

@section('content')
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
@endsection
