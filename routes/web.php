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

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

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

