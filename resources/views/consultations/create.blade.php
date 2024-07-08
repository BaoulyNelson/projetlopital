@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Ajouter une Consultation</h1>
        <form action="{{ route('consultations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idmedecin">Médecin</label>
                <select name="idmedecin" class="form-control" id="idmedecin" required>
                    @foreach($medecins as $medecin)
                    <option value="{{ $medecin->id }}">{{ $medecin->nom }} {{ $medecin->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="idpatient">Patient</label>
                <select name="idpatient" class="form-control" id="idpatient" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->nom }} {{ $patient->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="poids">Poids</label>
                <input type="number" name="poids" class="form-control" id="poids" required>
            </div>
            <div class="form-group">
                <label for="hauteur">Hauteur</label>
                <input type="number" name="hauteur" class="form-control" id="hauteur" required>
            </div>
            <div class="form-group">
                <label for="diagnostique">Diagnostique</label>
                <textarea name="diagnostique" class="form-control" id="diagnostique" required></textarea>
            </div>
            <div class="form-group">
                <label for="date_consultation">Date de Consultation</label>
                <input type="date" name="date_consultation" class="form-control" id="date_consultation" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection