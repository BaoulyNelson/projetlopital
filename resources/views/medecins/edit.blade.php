@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un Médecin</h1>
    <form action="{{ route('medecins.update', $medecin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" value="{{ $medecin->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="{{ $medecin->prenom }}" required>
        </div>
        <div class="form-group">
        <label for="sexe">Sexe</label>
        <select name="sexe" class="form-control" id="sexe" required>
            <option value="M" {{ $medecin->sexe == 'M' ? 'selected' : '' }}>M</option>
            <option value="F" {{ $medecin->sexe == 'F' ? 'selected' : '' }}>F</option>
        </select>
    </div>

        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="tel" name="tel" class="form-control" id="tel" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" value="{{ $medecin->adresse }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $medecin->email }}" required>
        </div>
        <div class="form-group">
            <label for="specialite">Spécialité</label>
            <input type="text" name="specialite" class="form-control" id="specialite" value="{{ $medecin->specialite }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection