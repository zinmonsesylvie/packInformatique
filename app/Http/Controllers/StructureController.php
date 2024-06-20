<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use illuminate\view\view;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Structure::all();
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('structure');
    }

    /**
     * Store a newly created resource in storage.
     */

     //Enregistre d'une nouvelle structure
        public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'sigle' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);

        // Création d'une structure
        Structure::create([
            'libelle' => $request->libelle,
            'sigle' => $request->sigle,
            'adresse' => $request->adresse,
        ]);

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'structure créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
