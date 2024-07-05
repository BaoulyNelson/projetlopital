<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dossiers = Dossier::all();
        return view('dossiers.index', compact('dossiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultations = Consultation::all();
        return view('dossiers.create', compact('consultations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'idconsultation' => 'required',
            'date_enregistrement' => 'required|date',
        ]);

        Dossier::create($request->all());

        return redirect()->route('dossiers.index')
                        ->with('success', 'Dossier créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dossier $dossier)
    {
        return view('dossiers.show', compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        $consultations = Consultation::all();
        return view('dossiers.edit', compact('dossier', 'consultations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dossier $dossier)
    {
        $request->validate([
            'code' => 'required',
            'idconsultation' => 'required',
            'date_enregistrement' => 'required|date',
        ]);

        $dossier->update($request->all());

        return redirect()->route('dossiers.index')
                        ->with('success', 'Dossier mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        $dossier->delete();

        return redirect()->route('dossiers.index')
                        ->with('success', 'Dossier supprimé avec succès.');
    }
}