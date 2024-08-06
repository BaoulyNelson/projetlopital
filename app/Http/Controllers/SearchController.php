<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Consultation;
use App\Models\Prescription;
use App\Models\Dossier;


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


        // Retourner la vue avec les résultats de recherche
        return view('search.results', compact(
            'query', 'patients', 'medecins', 'consultations', 'prescriptions', 'dossiers',
            
        ));
    }
}
