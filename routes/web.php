<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\DossierController;

Route::resource('medecins', MedecinController::class);
Route::resource('patients', PatientController::class);
Route::resource('consultations', ConsultationController::class);
Route::resource('prescriptions', PrescriptionController::class);
Route::resource('dossiers', DossierController::class);