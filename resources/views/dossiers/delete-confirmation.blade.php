@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmer la Suppression</h1>
    <p>Voulez-vous vraiment supprimer ce dossier : <strong>{{ $dossier->code }}</strong> ?</p>
    <form action="{{ route('dossiers.confirmDestroy', $dossier->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
        <a href="{{ route('dossiers.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
