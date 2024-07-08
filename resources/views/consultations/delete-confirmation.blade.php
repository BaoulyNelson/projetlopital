@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmer la Suppression</h1>
    <p>Voulez-vous vraiment supprimer cette consultation du {{ $consultation->date_consultation }} ?</p>
    <form action="{{ route('consultations.confirmDestroy', $consultation->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
        <a href="{{ route('consultations.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
