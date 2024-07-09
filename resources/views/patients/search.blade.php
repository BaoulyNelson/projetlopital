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
            <form action="{{ route('patients.search') }}" method="GET">
                <input type="text" name="query" placeholder="Entrez le nom du patient">
                <button type="submit">Rechercher</button>
            </form>
            <!-- Résultats de la recherche -->
            @if(isset($results))
                <ul class="search-results">
                    @foreach($results as $patient)
                        <li>{{ $patient->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>
