<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Consultation;
use App\Models\Prescription;
use App\Models\Dossier;
use App\Models\ALaUne;
use App\Models\ALaMinute;
use App\Models\Annonces;
use App\Models\Culture;
use App\Models\Economie;
use App\Models\Sport;
use App\Models\Editorial;
use App\Models\National;
use App\Models\Opinions;
use App\Models\Societe;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Recherche dans les entités liées à l'hôpital
        $patients = Patient::where('nom', 'like', '%' . $query . '%')
                           ->orWhere('prenom', 'like', '%' . $query . '%')
                           ->get();

        $medecins = Medecin::where('nom', 'like', '%' . $query . '%')
                           ->orWhere('prenom', 'like', '%' . $query . '%')
                           ->get();

        $consultations = Consultation::whereHas('patient', function ($q) use ($query) {
                                $q->where('nom', 'like', '%' . $query . '%')
                                  ->orWhere('prenom', 'like', '%' . $query . '%');
                            })
                            ->orWhereHas('medecin', function ($q) use ($query) {
                                $q->where('nom', 'like', '%' . $query . '%')
                                  ->orWhere('prenom', 'like', '%' . $query . '%');
                            })
                            ->get();

        $prescriptions = Prescription::whereHas('consultation', function ($q) use ($query) {
                                $q->whereHas('patient', function ($p) use ($query) {
                                    $p->where('nom', 'like', '%' . $query . '%')
                                      ->orWhere('prenom', 'like', '%' . $query . '%');
                                })
                                ->orWhereHas('medecin', function ($p) use ($query) {
                                    $p->where('nom', 'like', '%' . $query . '%')
                                      ->orWhere('prenom', 'like', '%' . $query . '%');
                                });
                            })
                            ->get();

        $dossiers = Dossier::whereHas('patient', function ($q) use ($query) {
                                $q->where('nom', 'like', '%' . $query . '%')
                                  ->orWhere('prenom', 'like', '%' . $query . '%');
                            })
                            ->get();

        // Recherche dans les autres catégories
        $aLaUneArticles = ALaUne::where('title', 'like', '%' . $query . '%')
                                ->orWhere('content', 'like', '%' . $query . '%')
                                ->get();

        $aLaMinuteArticles = ALaMinute::where('title', 'like', '%' . $query . '%')
                                      ->orWhere('content', 'like', '%' . $query . '%')
                                      ->get();

        $annoncesArticles = Annonces::where('title', 'like', '%' . $query . '%')
                                    ->orWhere('content', 'like', '%' . $query . '%')
                                    ->get();

        $cultureArticles = Culture::where('title', 'like', '%' . $query . '%')
                                  ->orWhere('content', 'like', '%' . $query . '%')
                                  ->get();

        $economieArticles = Economie::where('title', 'like', '%' . $query . '%')
                                    ->orWhere('content', 'like', '%' . $query . '%')
                                    ->get();

        $sportArticles = Sport::where('title', 'like', '%' . $query . '%')
                              ->orWhere('content', 'like', '%' . $query . '%')
                              ->get();

        $editorialArticles = Editorial::where('title', 'like', '%' . $query . '%')
                                      ->orWhere('content', 'like', '%' . $query . '%')
                                      ->get();

        $nationalArticles = National::where('title', 'like', '%' . $query . '%')
                                    ->orWhere('content', 'like', '%' . $query . '%')
                                    ->get();

        $opinionsArticles = Opinions::where('title', 'like', '%' . $query . '%')
                                    ->orWhere('content', 'like', '%' . $query . '%')
                                    ->get();

        $societeArticles = Societe::where('title', 'like', '%' . $query . '%')
                                  ->orWhere('content', 'like', '%' . $query . '%')
                                  ->get();

        // Retourner la vue avec les résultats de recherche
        return view('search.results', compact(
            'query', 'patients', 'medecins', 'consultations', 'prescriptions', 'dossiers',
            'aLaUneArticles', 'aLaMinuteArticles', 'annoncesArticles', 'cultureArticles',
            'economieArticles', 'sportArticles', 'editorialArticles', 'nationalArticles',
            'opinionsArticles', 'societeArticles'
        ));
    }
}
