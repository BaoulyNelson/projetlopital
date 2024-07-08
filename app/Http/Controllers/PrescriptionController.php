<?php
namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('prescriptions.index', compact('prescriptions'));
    }

    public function create()
    {
        $consultations = Consultation::all();
        return view('prescriptions.create', compact('consultations'));
    }

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

    public function show(Prescription $prescription)
    {
        return view('prescriptions.show', compact('prescription'));
    }

    public function edit(Prescription $prescription)
    {
        $consultations = Consultation::all();
        return view('prescriptions.edit', compact('prescription', 'consultations'));
    }

    public function update(Request $request, Prescription $prescription)
    {
        $request->validate([
            'idconsultation' => 'required',
            'prescription' => 'required',
        ]);

        $prescription->update($request->all());

        return redirect()->route('prescriptions.index')
                        ->with('success', 'Prescription mise à jour avec succès.');
    }

    public function destroy(Prescription $prescription)
    {
        return view('prescriptions.delete-confirmation', compact('prescription'));
    }

    public function showConfirmation(Prescription $prescription)
    {
        return view('prescriptions.delete-confirmation', compact('prescription'));
    }

    public function confirmDestroy(Request $request, Prescription $prescription)
    {
        $prescription->delete();

        return redirect()->route('prescriptions.index')
                        ->with('success', 'Prescription supprimée avec succès.');
    }
}
