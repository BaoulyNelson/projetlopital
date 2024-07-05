<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::all();
        return view('consultations.index', compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('consultations.create', compact('medecins', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idmedecin' => 'required',
            'idpatient' => 'required',
            'poids' => 'required|numeric',
            'hauteur' => 'required|numeric',
            'diagnostique' => 'required',
            'date_consultation' => 'required|date',
        ]);

        Consultation::create($request->all());

        return redirect()->route('consultations.index')
                        ->with('success', 'Consultation créée avec succès.');
    }

    // Autres méthodes du CRUD (show, edit, update, destroy) à ajouter
}