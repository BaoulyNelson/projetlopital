<!-- resources/views/patients/search.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de Dossier de Patient</title>
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Recherche de Dossier de Patient</h1>
        </div>
        <div class="content">
            <form action="{{ route('patients.search.submit') }}" method="POST">
                @csrf
                <input type="text" name="query" placeholder="Entrez le nom du patient">
                <button type="submit">Rechercher</button>
            </form>

            <!-- Résultats de la recherche -->
            @foreach ($patients as $patient)
                <li class="results-show-info">
                    <label>Nom :</label> <span>{{ $patient->nom }} {{ $patient->prenom }}</span>
                </li>
                @endforeach
        </div>
    </div>
</body>

</html>