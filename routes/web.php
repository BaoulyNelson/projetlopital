<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Route pour la page de connexion
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Route pour la page d'inscription
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Routes pour la récupération de mot de passe
Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetLinkController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [PasswordResetLinkController::class, 'store'])->name('password.update');

// Route pour la vérification d'email
Route::get('/verify-email', [VerifyEmailController::class, 'show'])->name('verification.notice');
Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, 'verify'])->name('verification.verify');
Route::post('/email/verification-notification', [VerifyEmailController::class, 'send'])->name('verification.send');  

Route::middleware(['web'])->group(function () {
    // Votre autre route

    Route::get('/set-locale/{locale}', function ($locale) {
        session(['locale' => $locale]);
        return back();
    })->name('set-locale');
});

// Médecins
Route::resource('medecins', MedecinController::class);
Route::get('/medecins', [MedecinController::class, 'index'])->name('medecins.index');
Route::get('/medecins/specialties', [MedecinController::class, 'specialties'])->name('medecins.specialties');
Route::get('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'showConfirmation'])->name('medecins.confirmDestroy');
Route::delete('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'confirmDestroy'])->name('medecins.confirmDestroy');

// Patients
Route::resource('patients', PatientController::class);
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::get('/patients/consultations', [PatientController::class, 'consultations'])->name('patients.consultations');
Route::get('/patients/search', [PatientController::class, 'search'])->name('patients.search');
Route::get('/patients/{patient}/confirm-destroy', [PatientController::class, 'showConfirmation'])->name('patients.confirmDestroy');
Route::delete('/patients/{patient}/confirm-destroy', [PatientController::class, 'confirmDestroy'])->name('patients.confirmDestroy');

// Consultations
Route::resource('consultations', ConsultationController::class);
Route::get('/consultations/create', [ConsultationController::class, 'create'])->name('consultations.create');
Route::get('/consultations/verify', [ConsultationController::class, 'verify'])->name('consultations.verify');
Route::get('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'showConfirmation'])->name('consultations.confirmDestroy');
Route::delete('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'confirmDestroy'])->name('consultations.confirmDestroy');

// Prescriptions
Route::resource('prescriptions', PrescriptionController::class);
Route::get('/prescriptions', [PrescriptionController::class, 'index'])->name('prescriptions.index');
Route::get('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'showConfirmation'])->name('prescriptions.confirmDestroy');
Route::delete('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'confirmDestroy'])->name('prescriptions.confirmDestroy');

// Dossiers
Route::resource('dossiers', DossierController::class);
Route::get('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'showConfirmation'])->name('dossiers.confirmDestroy');
Route::delete('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'confirmDestroy'])->name('dossiers.confirmDestroy');

// Recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

