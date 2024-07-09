<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function index()
    {
        $medecins = Medecin::all();
        return view('medecins.index', compact('medecins'));
    }

    public function create()
    {
        return view('medecins.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required|in:M,F',
            'tel' => 'required',
            'adresse' => 'required',
            'email' => 'required|email',
            'specialite' => 'required',
        ]);

        $medecin = Medecin::create($validatedData);

        return redirect()->route('medecins.index')
            ->with('success', 'Médecin créé avec succès.');
    }

    public function show(Medecin $medecin)
    {
        return view('medecins.show', compact('medecin'));
    }

    public function edit(Medecin $medecin)
    {
        return view('medecins.edit', compact('medecin'));
    }

    public function update(Request $request, Medecin $medecin)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required|in:M,F',
            'tel' => 'required',
            'adresse' => 'required',
            'email' => 'required|email',
            'specialite' => 'required',
        ]);

        $medecin->update($validatedData);

        return redirect()->route('medecins.index')
            ->with('success', 'Médecin mis à jour avec succès.');
    }

    public function destroy(Medecin $medecin)
    {
        return view('medecins.delete-confirmation', compact('medecin'));
    }

    public function showConfirmation(Medecin $medecin)
    {
        return view('medecins.delete-confirmation', compact('medecin'));
    }

    public function confirmDestroy(Request $request, Medecin $medecin)
    {
        $medecin->delete();

        return redirect()->route('medecins.index')
            ->with('success', 'Médecin supprimé avec succès.');
    }

    public function specialties()
    {
        // Récupérer les médecins organisés par spécialité
        $medecinsBySpecialty = Medecin::all()->groupBy('specialite');

        return view('medecins.specialties', compact('medecinsBySpecialty'));
    }

    
}
