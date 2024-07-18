<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.serviceall', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $structures = Structure::all();
        return view('services.service', compact('structures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'structure_id' => 'required|integer',
        ]);

        $service = New Service();
        $service->libelle = $request->libelle;
        $service->structure_id = $request->structure_id;
        $service->save();
        return redirect()->route("afficherService")->with("success","Service enregistré avec succès");
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
        $structures  = Structure::all();
        return view('services.editservice', compact("service","structures"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valider les données
        $service->libelle = $request->libelle;
        $service->structure_id = $request->structure_id;
        $service->update();

        // Rediriger avec un message de succès
        return redirect()->route("afficherService")->with("success","Les informations du service  ont été mise à jour");    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->route("afficherService")->with("success","Service supprimé avec succès");
    }
}
