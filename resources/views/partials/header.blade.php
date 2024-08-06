<!-- resources/views/partials/header.blade.php -->
<nav class="navbar navbar-top text-center">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">À Propos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">Services Médicaux</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('emergencies') ? 'active' : '' }}" href="/emergencies">Urgences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('appointments') ? 'active' : '' }}" href="https://form.jotform.com/242057526292861">Rendez-vous</a>
        </li>

    </ul>
</nav>



<div class="header-main text-center">

    <div class="logo">Baouly's Hôspital</div>

    <div class="user-actions">
    @if(Auth::check() && Auth::user()->isAdmin())
    <a href="{{ route('dashboard.index') }}" class="text-white">
        <i class="fas fa-user"></i>
    </a>
    @else
    <a href="{{ route('profile') }}" class="text-white">
        <i class="fas fa-user"></i>
    </a>
    @endif
</div>


 
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('patients') ? 'active' : '' }}" href="/patients">Patients</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('doctors') ? 'active' : '' }}" href="/medecins">Médecins</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('prescriptions') ? 'active' : '' }}" href="/prescriptions">Prescriptions</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('consultations') ? 'active' : '' }}" href="/consultations">Consultations</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('files') ? 'active' : '' }}" href="/dossiers">Dossiers</a>
        </li>
        <div class="search-icon" onclick="toggleSearchForm()">
        <i class="fa fa-search"></i>
    </div>
    </ul>

</div>

<div class="d-flex align-items-center">

    <form action="{{ route('search') }}" method="GET" class="form-inline ml-3 hidden" id="searchForm">
        <input type="search" name="query" class="form-control" id="search-input" placeholder="Rechercher...">
        <button type="submit" class="btn btn-danger">Search</button>
    </form>
</div>