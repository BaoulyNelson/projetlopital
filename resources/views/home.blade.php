<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de l'Hôpital</title>

    <!-- Inclure Bootstrap CSS -->
    <link
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rel="stylesheet"/>
    <!-- Inclure Font Awesome CSS -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        rel="stylesheet"/>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('css/formulaireHome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/specialite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarTop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarMain.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contenus.css') }}">

    @yield('styles')
</head>

<body>

    @include('partials.header')

    <div class="main-container">
        <div class="content">
            <!-- Jumbotron Section -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Bienvenue à Baouly's Hôspital !</h1>
                    <p class="lead">Votre santé est notre priorité. Découvrez nos services et prenez rendez-vous dès aujourd'hui.</p>
                    <hr class="my-4">
                    <p>Nous offrons une large gamme de services médicaux pour répondre à tous vos besoins.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a>
                </div>
            </div>
            <!-- Fin de la Section Jumbotron -->

            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/sidebarHome.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
