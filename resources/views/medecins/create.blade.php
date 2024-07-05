@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Médecin</h1>
    <form action="{{ route('medecins.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <input type="text" name="sexe" class="form-control" id="sexe" required>
        </div>
        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="tel" name="tel" class="form-control" id="tel" required>
        </div>
        
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="specialite">Spécialité</label>
            <input type="text" name="specialite" class="form-control" id="specialite" required>
        </div>
      
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection