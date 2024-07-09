<!-- resources/views/patients/consultations.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultations d’un Patient</title>
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Liste des Consultations d’un Patient</h1>
        </div>
        <div class="content">
            @foreach ($patients as $patient)
                <h2>{{ $patient->nom }}</h2>
                <ul class="consultations-list">
                    @foreach ($patient->consultations as $consultation)
                        <li>{{ $consultation->details }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</body>
</html>
