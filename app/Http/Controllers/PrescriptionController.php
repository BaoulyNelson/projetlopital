<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('prescriptions.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultations = Consultation::all();
        return view('prescriptions.create', compact('consultations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idconsultation' => 'required',
            'prescription' => 'required',
        ]);

        Prescription::create($request->all());

        return redirect()->route('prescriptions.index')
                        ->with('success', 'Prescription créée avec succès.');
    }

    // Autres méthodes du CRUD (show, edit, update, destroy) à ajouter
}