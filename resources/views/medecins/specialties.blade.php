
<!-- resources/views/medecins/specialties.blade.php -->

@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
@section('content')
<div class="container">
    <div class="header">
        <h1>Liste des médecins par spécialité</h1>
    </div>
    <div class="content">
        @foreach($medecinsBySpecialty as $specialite => $medecins)
            <div class="specialty-group">
                <h2>{{ $specialite }}</h2>
                <ul class="doctors-list">
                    @foreach($medecins as $medecin)
                        <li>{{ $medecin->nom }} {{ $medecin->prenom }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection
