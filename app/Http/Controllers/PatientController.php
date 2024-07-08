<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
        ]);

        Patient::create($validatedData);

        return redirect()->route('patients.index')
                        ->with('success', 'Patient ajouté avec succès.');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
        ]);

        $patient->update($validatedData);

        return redirect()->route('patients.index')
                        ->with('success', 'Patient mis à jour avec succès.');
    }

    public function destroy(Patient $patient)
    {
        return view('patients.delete-confirmation', compact('patient'));
    }

    public function showConfirmation(Patient $patient)
    {
        return view('patients.delete-confirmation', compact('patient'));
    }

    public function confirmDestroy(Request $request, Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
                        ->with('success', 'Patient supprimé avec succès.');
    }
}
