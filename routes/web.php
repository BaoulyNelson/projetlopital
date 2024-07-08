<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('medecins', MedecinController::class);
Route::resource('patients', PatientController::class);
Route::resource('consultations', ConsultationController::class);
Route::resource('prescriptions', PrescriptionController::class);
Route::resource('dossiers', DossierController::class);

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'showConfirmation'])->name('dossiers.confirmDestroy');
Route::delete('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'confirmDestroy'])->name('dossiers.confirmDestroy');

Route::get('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'showConfirmation'])->name('prescriptions.confirmDestroy');
Route::delete('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'confirmDestroy'])->name('prescriptions.confirmDestroy');

Route::get('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'showConfirmation'])->name('consultations.confirmDestroy');
Route::delete('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'confirmDestroy'])->name('consultations.confirmDestroy');

Route::get('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'showConfirmation'])->name('medecins.confirmDestroy');
Route::delete('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'confirmDestroy'])->name('medecins.confirmDestroy');


Route::get('/patients/{patient}/confirm-destroy', [PatientController::class, 'showConfirmation'])->name('patients.confirmDestroy');
Route::delete('/patients/{patient}/confirm-destroy', [PatientController::class, 'confirmDestroy'])->name('patients.confirmDestroy');