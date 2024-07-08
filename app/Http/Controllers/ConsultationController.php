<?php
namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();
        return view('consultations.index', compact('consultations'));
    }

    public function create()
    {
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('consultations.create', compact('medecins', 'patients'));
    }

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

    public function show(Consultation $consultation)
    {
        return view('consultations.show', compact('consultation'));
    }

    public function edit(Consultation $consultation)
    {
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('consultations.edit', compact('consultation', 'medecins', 'patients'));
    }

    public function update(Request $request, Consultation $consultation)
    {
        $request->validate([
            'idmedecin' => 'required',
            'idpatient' => 'required',
            'poids' => 'required|numeric',
            'hauteur' => 'required|numeric',
            'diagnostique' => 'required',
            'date_consultation' => 'required|date',
        ]);

        $consultation->update($request->all());

        return redirect()->route('consultations.index')
                        ->with('success', 'Consultation mise à jour avec succès.');
    }

    public function destroy(Consultation $consultation)
    {
        return view('consultations.delete-confirmation', compact('consultation'));
    }

    public function showConfirmation(Consultation $consultation)
    {
        return view('consultations.delete-confirmation', compact('consultation'));
    }

    public function confirmDestroy(Request $request, Consultation $consultation)
    {
        $consultation->delete();

        return redirect()->route('consultations.index')
                        ->with('success', 'Consultation supprimée avec succès.');
    }
}
