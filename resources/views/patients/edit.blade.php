@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un Patient</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" value="{{ $patient->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="{{ $patient->prenom }}" required>
        </div>
        <div class="form-group">
        <label for="sexe">Sexe</label>
        <select name="sexe" class="form-control" id="sexe" required>
            <option value="M" {{ $patient->sexe == 'M' ? 'selected' : '' }}>M</option>
            <option value="F" {{ $patient->sexe == 'F' ? 'selected' : '' }}>F</option>
        </select>
    </div>
        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="text" name="tel" class="form-control" id="tel" value="{{ $patient->tel }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" value="{{ $patient->adresse }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
