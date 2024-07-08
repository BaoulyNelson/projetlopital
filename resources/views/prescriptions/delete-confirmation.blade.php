@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmer la Suppression</h1>
    <p>Voulez-vous vraiment supprimer cette prescription : <strong>{{ $prescription->prescription }}</strong> ?</p>
    <form action="{{ route('prescriptions.confirmDestroy', $prescription->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
        <a href="{{ route('prescriptions.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
