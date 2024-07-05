<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
 
    public function index()
    {
        $data = Dashboard::all();
        return view('dashboard', compact('data'));
    }

  
    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Dashboard::create($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success','Dashboard item created successfully.');
    }

 
}