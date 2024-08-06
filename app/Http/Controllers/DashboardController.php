<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content; // Importez le modèle Content

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $data = Content::all(); 
        return view('dashboard', compact('data')); 
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|unique:contents',
            'title' => 'required',
            'subtitle' => 'nullable',
            'description' => 'nullable',
            'button_text' => 'nullable',
            'content' => 'nullable',
        ]);

        Content::create($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success', 'Content item created successfully.');
    }
}
