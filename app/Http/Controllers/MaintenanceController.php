<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Maintenance::all();
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maintenance');
    }

    public function showRegistrationForm() {
        $materiels = Materiel::all();
        return view('maintenance', compact('materiels'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'objet_de_maintenance' => 'required|string',
            'type_de_maintenance' => 'required|string',
            'date_de_maintenance' => 'required|date',
            'materiel_id' => 'required|integer',
            'nom_intervenant' => 'required|string',
            'prenom_intervenant' => 'required|string',
            'nom_structure' => 'required|string',
        ]);


        //enregistrement de l'intervenant
        $intervenant = New Intervenant();
        $intervenant->nom_intervenant = $request->nom_intervenant;
        $intervenant->prenom_intervenant = $request->penom_intervenant;
        $intervenant->nom_structure = $request->nom_structure;
        $intervenant->save();

        //enregistrement d'une maintenance
        $maintenance = New Maintenance();
        $maintenance->objet_de_maintenance = $request->objet_de_maintenance;
        $maintenance->type_de_maintenance = $request->type_de_maintenance;
        $maintenance->date_de_maintenance = $request->date_de_maintenance;
        $maintenance->materiel_id = $request->materiel_id;
        $maintenance->intervenant_id = $intervenant->id;
        $maintenance->save();
        return response()->json('succès',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
