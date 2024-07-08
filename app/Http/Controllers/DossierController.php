<?php
namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    public function index()
    {
        $dossiers = Dossier::all();
        return view('dossiers.index', compact('dossiers'));
    }

    public function create()
    {
        $consultations = Consultation::all();
        return view('dossiers.create', compact('consultations'));
    }

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

    public function show(Dossier $dossier)
    {
        return view('dossiers.show', compact('dossier'));
    }

    public function edit(Dossier $dossier)
    {
        $consultations = Consultation::all();
        return view('dossiers.edit', compact('dossier', 'consultations'));
    }

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

    public function destroy(Dossier $dossier)
    {
        return view('dossiers.delete-confirmation', compact('dossier'));
    }

    public function showConfirmation(Dossier $dossier)
    {
        return view('dossiers.delete-confirmation', compact('dossier'));
    }

    public function confirmDestroy(Request $request, Dossier $dossier)
    {
        $dossier->delete();

        return redirect()->route('dossiers.index')
                        ->with('success', 'Dossier supprimé avec succès.');
    }
}
