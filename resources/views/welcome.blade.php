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
    

    <style>
        html,
        body {
            background-color: white;
            color: black;
            font-family: 'arial', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;

        }

        .full-height {
            height: 100vh;
        }

        .fond-blanc {
            background-color: #ffffff;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: #00b894;
            margin-bottom: 50px;
        }

        .header {
            background-color: #00b894;
            padding: 20px;
            color: #fff;
            text-align: center;
            /* Alignement central du texte pour le titre */
        }

        .header h1 {
            font-size: 32px;
            margin: 0;
        }

        .links>a {
            display: inline-block;
            color: #00b894;
            padding: 10px 25px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border: 2px solid #00b894;
            border-radius: 5px;
            margin: 20px 10px 10px;
            /* Ajustement de la marge pour positionner les liens */
            transition: all 0.3s ease;
        }

        .links>a:hover {
            background-color: #00b894;
            color: #fff;
        }

        @media (max-width: 768px) {
            .header {
                padding: 10px;
            }

            .header h1 {
                font-size: 24px;
            }

            .links>a {
                font-size: 14px;
                padding: 5px 10px;
                margin: 10px;
                /* Ajustement de la marge pour les petits écrans */
            }
        }

        /* Bouton pour remonter en haut */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
        }

        #myBtn:hover {
            background-color: #555;
        }

        .footer {
            padding: 20px;
            margin-top: 20px;
            background-color: #333;
            color: white;
            padding: 2rem 0;
            display: flex;
            justify-content: space-between;
        }

        .footer h5 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .footer ul {
            padding: 0;
            list-style-type: none;
        }

        .footer li {
            margin-bottom: 0.5rem;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Gestion d'Hôpital</h1>
    </div>


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

        <div class="content">
            <div class="links">
                <a href="{{ route('patients.index') }}">Patients</a>
                <a href="{{ route('medecins.index') }}">Médecins</a>
                <a href="{{ route('consultations.index') }}">Consultations</a>
                <a href="{{ route('prescriptions.index') }}">Prescriptions</a>
                <a href="{{ route('dossiers.index') }}">Dossiers</a>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
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
    
    <footer class="footer bg-dark text-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nos services pour...</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Médecine générale</a></li>
                        <li><a href="#" class="text-white">Chirurgie générale</a></li>
                        <li><a href="#" class="text-white">Pédiatrie</a></li>
                        <li><a href="#" class="text-white">Gynécologie et obstétrique</a></li>
                        <li><a href="#" class="text-white">Cardiologie</a></li>
                        <li><a href="#" class="text-white">Neurologie</a></li>
                        <li><a href="#" class="text-white">Oncologie</a></li>
                        <li><a href="#" class="text-white">Dermatologie</a></li>
                        <li><a href="#" class="text-white">Orthopédie</a></li>
                        <li><a href="#" class="text-white">Ophtalmologie</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Nos services pour...</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Radiologie</a></li>
                        <li><a href="#" class="text-white">Anesthésiologie</a></li>
                        <li><a href="#" class="text-white">Médecine d'urgence</a></li>
                        <li><a href="#" class="text-white">Soins intensifs</a></li>
                        <li><a href="#" class="text-white">Néphrologie</a></li>
                        <li><a href="#" class="text-white">Pneumologie</a></li>
                        <li><a href="#" class="text-white">Endocrinologie</a></li>
                        <li><a href="#" class="text-white">Gastro-entérologie</a></li>
                        <li><a href="#" class="text-white">Médecine physique et réadaptation</a></li>
                        <li><a href="#" class="text-white">Psychiatrie</a></li>
                    </ul>
                </div>
            </div>
            <div class="container text-center">
                <p>&copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Tous droits réservés Copyright Inc.</p>
            </div>
        </div>
    </footer>
    <!-- Bouton pour remonter en haut de la page -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg>
    </button>
    </footer>

    <script>
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
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>