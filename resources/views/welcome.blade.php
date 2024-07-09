<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestion d'Hôpital</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Autres éléments de l'en-tête -->
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    <div class="header">
        <div class="content">

            <h1 class="custom-title">Baouly's Hôpital</h1>
            <div class="circle-image">
                <img src="{{ asset('Images/logo.jpg') }}" alt="Logo">
            </div>
            <div class="hamburger-icon" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <div class="links">
                <a href="{{ route('patients.index') }}">Patients</a>
                <a href="{{ route('medecins.index') }}">Médecins</a>
                <a href="{{ route('consultations.index') }}">Consultations</a>
                <a href="{{ route('prescriptions.index') }}">Prescriptions</a>
                <a href="{{ route('dossiers.index') }}">Dossiers</a>
                <div class="search-icon" onclick="toggleSearchForm()">
                    <i class="fa fa-search"></i>
                </div>
                <form action="{{ route('search') }}" method="GET" class="hidden">
                    <div class="form-group search-container d-flex align-items-center">
                        <input type="search" name="query" class="form-control" id="search-input" placeholder="Rechercher...">
                        <button type="submit" class="btn btn-primary ml-2">Search</button>
                    </div>
                </form>
            </div>
            <div class="close-icon" onclick="toggleMenu()">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>

    @yield('content')

    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

    </script>


</body>

</html>