
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="dashboard-title mb-4">Bienvenue sur le tableau de bord de gestion de l'hôpital</h1>
            <p class="dashboard-description mb-5">Utilisez les liens ci-dessous pour gérer les patients, médecins, consultations, prescriptions et dossiers.</p>

            <div class="fond-blanc">
                <ul class="features-list">
                    @auth
                    @if(auth()->user()->isAdmin())
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('medecins.create') }}" class="feature-link">
                            <i class="fas fa-user-md feature-icon"></i> Enregistrement des médecins de l'hôpital
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('patients.create') }}" class="feature-link">
                            <i class="fas fa-user feature-icon"></i> Enregistrement des informations sur patient
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('dossiers.create') }}" class="feature-link">
                            <i class="fas fa-folder-open feature-icon"></i> Création de dossier pour un patient
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('consultations.create') }}" class="feature-link">
                            <i class="fas fa-stethoscope feature-icon"></i> Enregistrement d'une consultation
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('prescriptions.create') }}" class="feature-link">
                            <i class="fas fa-prescription feature-icon"></i> Enregistrement des prescriptions
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('medecins.index') }}" class="feature-link">
                            <i class="fas fa-list feature-icon"></i> Liste des médecins par spécialité
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('consultations.index') }}" class="feature-link">
                            <i class="fas fa-file-medical-alt feature-icon"></i> Liste des consultations d'un patient
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('patients.search') }}" class="feature-link">
                            <i class="fas fa-search feature-icon"></i> Recherche de dossier d'un patient
                        </a>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('consultations.index') }}" class="feature-link">
                            <i class="fas fa-check feature-icon"></i> Vérification de consultation
                        </a>
                    </li>
                    @else
                    <p>Vous n'avez pas les autorisations nécessaires pour accéder à ces fonctionnalités.</p>
                    @endif
                    @else
                    <p>Veuillez vous connecter pour accéder à ces fonctionnalités.</p>
                    @endauth
                </ul>
            </div>

        </div>
    </div>
</div>