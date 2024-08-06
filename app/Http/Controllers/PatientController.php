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
            'sexe' => 'required|in:M,F',
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
            'sexe' => 'required|in:M,F',
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

    public function consultations()
    {
        // Logique pour lister les consultations d'un patient
        $patients = Patient::with('consultations')->get();
        return view('patients.consultations', compact('patients'));
    }

   /**
     * Affiche le formulaire de recherche.
     */
    public function showSearchForm()
    {
        return view('patients.search');
    }

    /**
     * Traite la recherche de patient.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Exemple de recherche dans la base de données
        $results = Patient::where('name', 'like', "%{$query}%")->get();

        return view('patients.search', compact('results'));
    }
}
