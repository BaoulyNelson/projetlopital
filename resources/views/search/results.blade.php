@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/results.css') }}">
@endpush
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/results.css') }}">
@endsection
@section('content')
<div class="results-show-container">
    <h1 class="results-show-title">Résultats de recherche</h1>

    @if (count($patients) > 0 || count($medecins) > 0 || count($consultations) > 0 || count($prescriptions) > 0 || count($dossiers) > 0 ||
    count($aLaUneArticles) > 0 || count($aLaMinuteArticles) > 0 || count($annoncesArticles) > 0 || count($cultureArticles) > 0 ||
    count($economieArticles) > 0 || count($sportArticles) > 0 || count($editorialArticles) > 0 || count($nationalArticles) > 0 ||
    count($opinionsArticles) > 0 || count($societeArticles) > 0)
    <div class="row">
        <div class="col-md-6">
            <h2>Patients</h2>
            <ul>
                @foreach ($patients as $patient)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $patient->nom }} {{ $patient->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Médecins</h2>
            <ul>
                @foreach ($medecins as $medecin)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $medecin->nom }} {{ $medecin->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Consultations</h2>
            <ul>
                @foreach ($consultations as $consultation)
                <li class="results-show-info">
                    <label>Patient :</label> <span>{{ $consultation->patient->nom }} {{ $consultation->patient->prenom }}</span><br>
                    <label>Médecin :</label> <span>{{ $consultation->medecin->nom }} {{ $consultation->medecin->prenom }}</span><br>
                    <label>Date :</label> <span>{{ $consultation->date }}</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Prescriptions</h2>
            <ul>
                @foreach ($prescriptions as $prescription)
                <li class="results-show-info">
                    <label>Patient :</label> <span>{{ $prescription->consultation->patient->nom }} {{ $prescription->consultation->patient->prenom }}</span><br>
                    <label>Médecin :</label> <span>{{ $prescription->consultation->medecin->nom }} {{ $prescription->consultation->medecin->prenom }}</span><br>
                    <label>Date :</label> <span>{{ $prescription->created_at }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Dossiers</h2>
            <ul>
                @foreach ($dossiers as $dossier)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $dossier->patient->nom }} {{ $dossier->patient->prenom }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <h2>À la une</h2>
        <ul>
            @foreach ($aLaUneArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>À la minute</h2>
        <ul>
            @foreach ($aLaMinuteArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>Annonces</h2>
        <ul>
            @foreach ($annonceArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Culture</h2>
        <ul>
            @foreach ($cultureArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>Économie</h2>
        <ul>
            @foreach ($economieArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Sport</h2>
        <ul>
            @foreach ($sportArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>Éditorial</h2>
        <ul>
            @foreach ($editorialArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>National</h2>
        <ul>
            @foreach ($nationalArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>Opinions</h2>
        <ul>
            @foreach ($opinionsArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Société</h2>
        <ul>
            @foreach ($societeArticles as $article)
            <li class="results-show-info">
                <label>Titre :</label> <span>{{ $article->title }}</span><br>
                <label>Contenu :</label> <span>{{ $article->content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>


    @else
    <p>Aucun résultat trouvé pour '{{ $query }}'.</p>
    @endif

    <div class="results-show-actions">
        <button onclick="javascript:history.back();">Retour</button>
        <button>Exporter</button>
    </div>

</div>
@endsection
