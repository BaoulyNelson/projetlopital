
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'Hôpital</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
            <h1>Baouly's Hôpital</h1>
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
        <div class="form-group search-container">
            <input type="text" name="query" class="form-control" id="search-input" placeholder="Rechercher...">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
            </div>
            <div class="close-icon" onclick="toggleMenu()">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>


    @yield('content')
    <div class="container">
        <div class="fond-blanc">
            <p>Donner la possibilité de faire l’enregistrement des médecins de l’hôpital.</p>
            <p>Donner la possibilité de faire l’enregistrement des informations sur patient.</p>
            <p>Créer un dossier pour un patient.</p>
            <p>Donner la possibilité d’enregistrer une consultation faite par un patient dans son dossier.</p>
            <p>Enregistrer les prescriptions données pour une consultation d’un patient.</p>
            <p>Lister les médecins de l’hôpital par spécialité.</p>
            <p>Lister les consultations effectuées par un patient.</p>
            <p>Trouver un dossier d’un patient.</p>
            <p>Vérifier une consultation dans un dossier.</p>
        </div>
    </div>
 
  
    <script>
    function toggleMenu() {
  const links = document.querySelector('.links');
  const hamburgerIcon = document.querySelector('.hamburger-icon');
  const closeIcon = document.querySelector('.close-icon');

  links.classList.toggle('open');
  hamburgerIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');
}

        let lastScrollTop = 0;

        window.onscroll = function() {
            let currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Scrolling down
                document.getElementById("myBtn").style.display = "block";
            } else {
                // Scrolling up
                document.getElementById("myBtn").style.display = "none";
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        };

        // Lorsque l'utilisateur clique sur le bouton, faire défiler vers le haut de la page
        function topFunction() {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
        }

        function toggleSearchForm() {
            var searchForm = document.querySelector('form');
            searchForm.classList.toggle('hidden');
            if (!searchForm.classList.contains('hidden')) {
                document.querySelector('#search-input').focus();
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>