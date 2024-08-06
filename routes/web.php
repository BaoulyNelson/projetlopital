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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');



// Routes protégées par middleware 'admin'
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
});

// Routes accessibles aux visiteurs
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');


// Routes de connexion et déconnexion
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Routes d'inscription
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Routes pour la récupération et réinitialisation de mot de passe
Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetLinkController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [PasswordResetLinkController::class, 'store'])->name('password.update');

// Routes pour la vérification d'email
Route::get('/verify-email', [VerifyEmailController::class, 'show'])->name('verification.notice');
Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, 'verify'])->name('verification.verify');
Route::post('/email/verification-notification', [VerifyEmailController::class, 'send'])->name('verification.send');

// Route pour accepter les cookies
Route::post('/accept-cookies', function () {
    return redirect()->back()->withCookie(cookie('cookies_accepted', true, 525600));
})->name('accept-cookies');

// Routes pour l'authentification Google
Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {
    $user = Socialite::driver('google')->user();

    $existingUser = User::where('email', $user->getEmail())->first();
    if ($existingUser) {
        Auth::login($existingUser);
    } else {
        $newUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'google_id' => $user->getId(),
        ]);
        Auth::login($newUser);
    }

    return redirect('/home');
});

// Routes pour définir la locale
Route::get('/set-locale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return back();
})->name('set-locale');

// Routes pour les médecins
Route::resource('medecins', MedecinController::class);
Route::get('/medecins/specialties', [MedecinController::class, 'specialties'])->name('medecins.specialties');
Route::get('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'showConfirmation'])->name('medecins.confirmDestroy');
Route::delete('/medecins/{medecin}/confirm-destroy', [MedecinController::class, 'confirmDestroy'])->name('medecins.confirmDestroy');

// Routes pour les patients
Route::resource('patients', PatientController::class);
Route::get('/patients/consultations', [PatientController::class, 'consultations'])->name('patients.consultations');
Route::get('/patients/{patient}/confirm-destroy', [PatientController::class, 'showConfirmation'])->name('patients.confirmDestroy');
Route::delete('/patients/{patient}/confirm-destroy', [PatientController::class, 'confirmDestroy'])->name('patients.confirmDestroy');

// Routes pour les consultations
Route::resource('consultations', ConsultationController::class);
Route::get('/consultations/verify', [ConsultationController::class, 'verify'])->name('consultations.verify');
Route::get('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'showConfirmation'])->name('consultations.confirmDestroy');
Route::delete('/consultations/{consultation}/confirm-destroy', [ConsultationController::class, 'confirmDestroy'])->name('consultations.confirmDestroy');

// Routes pour les prescriptions
Route::resource('prescriptions', PrescriptionController::class);
Route::get('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'showConfirmation'])->name('prescriptions.confirmDestroy');
Route::delete('/prescriptions/{prescription}/confirm-destroy', [PrescriptionController::class, 'confirmDestroy'])->name('prescriptions.confirmDestroy');

// Routes pour les dossiers
Route::resource('dossiers', DossierController::class);
Route::get('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'showConfirmation'])->name('dossiers.confirmDestroy');
Route::delete('/dossiers/{dossier}/confirm-destroy', [DossierController::class, 'confirmDestroy'])->name('dossiers.confirmDestroy');

// Route pour la recherche générale
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Routes pour la recherche de dossier de patient
Route::get('/patients/search', [PatientController::class, 'showSearchForm'])->name('patients.search');
Route::post('/patients/search', [PatientController::class, 'search'])->name('patients.search.submit');

Route::get('/medecins', [MedecinController::class, 'index'])->name('medecins.index');
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');


