@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Consultation</h1>
    <form action="{{ route('consultations.update', $consultation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idmedecin">Médecin</label>
            <select name="idmedecin" class="form-control" id="idmedecin" required>
                @foreach($medecins as $medecin)
                <option value="{{ $medecin->id }}" {{ $medecin->id == $consultation->idmedecin ? 'selected' : '' }}>{{ $medecin->nom }} {{ $medecin->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idpatient">Patient</label>
            <select name="idpatient" class="form-control" id="idpatient" required>
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}" {{ $patient->id == $consultation->idpatient ? 'selected' : '' }}>{{ $patient->nom }} {{ $patient->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="number" name="poids" class="form-control" id="poids" value="{{ $consultation->poids }}" required>
        </div>
        <div class="form-group">
            <label for="hauteur">Hauteur</label>
            <input type="number" name="hauteur" class="form-control" id="hauteur" value="{{ $consultation->hauteur }}" required>
        </div>
        <div class="form-group">
            <label for="diagnostique">Diagnostique</label>
            <textarea name="diagnostique" class="form-control" id="diagnostique" required>{{ $consultation->diagnostique }}</textarea>
        </div>
        <div class="form-group">
            <label for="date_consultation">Date de Consultation</label>
            <input type="date" name="date_consultation" class="form-control" id="date_consultation" value="{{ $consultation->date_consultation }}" required>
        </div>
        <button type="submit" class="btn
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
