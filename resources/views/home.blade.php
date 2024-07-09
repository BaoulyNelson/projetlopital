<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de l'Hôpital</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="custom-title">Bienvenue sur Baouly's Hôpital</h1>

        </div>
        <div class="fond-blanc">
            <ul class="features-list">
                <li>
                    <a href="{{ route('medecins.create') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-user-md"></i> Enregistrement des médecins de l'hôpital
                    </a>
                </li>
                <li>
                    <a href="{{ route('patients.create') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-user"></i> Enregistrement des informations sur patient
                    </a>
                </li>
                <li>
                    <a href="{{ route('dossiers.create') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-folder-open"></i> Création de dossier pour un patient
                    </a>
                </li>
                <li>
                    <a href="{{ route('consultations.create') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-stethoscope"></i> Enregistrement d'une consultation
                    </a>
                </li>
                <li>
                    <a href="{{ route('prescriptions.create') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-prescription"></i> Enregistrement des prescriptions
                    </a>
                </li>
                <li>
                    <a href="{{ route('medecins.index') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-list"></i> Liste des médecins par spécialité
                    </a>
                </li>
                <li>
                    <a href="{{ route('patients.index') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-file-medical-alt"></i> Liste des consultations d'un patient
                    </a>
                </li>
                <li>
                    <a href="{{ route('patients.search') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-search"></i> Recherche de dossier d'un patient
                    </a>
                </li>
                <li>
                    <a href="{{ route('consultations.index') }}" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-check"></i> Vérification de consultation
                    </a>
                </li>
            </ul>
        </div>

    </div>


</body>

</html>