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
        $structures = Structure::all();
        return view('structures.structureall', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('structures.structure');
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
        return redirect()->route("afficherStructure")->with("success","Structure enregistrée avec succès");
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
         // Récupérer la structure par son ID
         $structure = Structure::find($id);

        // Retourner la vue avec la structure à éditer
        return view('structures.editstructure', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Valider les données
    $validatedData = $request->validate([
        'libelle' => 'required|string|max:255',
        'sigle' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
    ]);

    // Récupérer la structure par son ID
    $structure = Structure::find($id);

    // Mettre à jour la structure
    $structure->update($validatedData);

    // Rediriger avec un message de succès
    return view('structures.structureall');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Structure $structure)
    {
        $structure->delete();
        return redirect()->route("afficherStructure")->with("success","Strucutre supprimée avec succès");

    }
}
