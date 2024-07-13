<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de l'Hôpital</title>
    <link rel="stylesheet" href="{{ asset('css/nouvelliste.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    @yield('styles')


</head>

<body>
    <div class="top-header">
        <div class="top-nav">
            <a href="{{ route('patients.create') }}">Patients</a>
            <a href="{{ route('medecins.create') }}">Médecins</a>
            <a href="{{ route('consultations.create') }}">Consultations</a>
            <a href="{{ route('prescriptions.create') }}"> Prescriptions</a>
            <a href="{{ route('dossiers.create') }}"> Dossiers</a>
        </div>
        <div class="date-time" id="date-time"></div>
    </div>
    <header>

        <div class="header-content">
            <i class="fas fa-bars hamburger-icon" onclick="toggleSidebar()"></i>
            <div class="search-icon" onclick="toggleSearchForm()">
                <i class="fa fa-search"></i>
            </div>
            <form action="{{ route('search') }}" method="GET" class="hidden">
                <div class="form-group search-container d-flex align-items-center">
                    <input type="search" name="query" class="form-control" id="search-input" placeholder="Rechercher...">
                    <button type="submit" class="btn-primary ml-2 custom-btn">Search</button>
                </div>
            </form>
            <div class="header-title-container">
            <div class="language-switch">
    <a href="{{ route('set-locale', ['locale' => 'fr']) }}">FRANÇAIS</a> |
    <a href="{{ route('set-locale', ['locale' => 'en']) }}">ENGLISH</a>
</div>

                <h1 class="custom-title">Baouly's Hôpital</h1>
                
            </div>



            <a href="{{ route('login') }}" class="login">
                <i class="fas fa-user"></i>
            </a>
        </div>

        <nav class="main-nav">
            <a href="#">À la une</a>
            <a href="#">À la minute</a>
            <a href="#">Annonces</a>
            <a href="#">Culture</a>
            <a href="#">Economie</a>
            <a href="#">Sport</a>
            <a href="#">Editorial</a>
            <a href="#">National</a>
            <a href="#">Opinions</a>
            <a href="#">Société</a>
        </nav>
    </header>

    <div class="sidebar" id="sidebar">
        <a href="#" class="close-btn" onclick="toggleSidebar()">&times;</a>
        <a href="#">À la une</a>
        <a href="#">À la minute</a>
        <a href="#">Annonces</a>
        <a href="#">Culture</a>
        <a href="#">Economie</a>
        <a href="#">Sport</a>
        <a href="#">Editorial</a>
        <a href="#">National</a>
        <a href="#">Opinions</a>
        <a href="#">Société</a>
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

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>