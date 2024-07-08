@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmer la Suppression</h1>
    <p>Voulez-vous vraiment supprimer ce médecin : {{ $medecin->nom }} {{ $medecin->prenom }} ?</p>
    <form action="{{ route('medecins.confirmDestroy', $medecin->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
        <a href="{{ route('medecins.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
