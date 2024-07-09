<!-- resources/views/consultations/verify.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Consultation</title>
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Vérification de Consultation</h1>
        </div>
        <div class="content">
            <form action="{{ route('consultations.verify') }}" method="GET">
                <input type="text" name="consultation_id" placeholder="Entrez l'ID de la consultation">
                <button type="submit">Vérifier</button>
            </form>
            <!-- Résultats de la vérification -->
            @if(isset($consultation))
                <p>Détails de la consultation: {{ $consultation->details }}</p>
            @endif
        </div>
    </div>
</body>
</html>
