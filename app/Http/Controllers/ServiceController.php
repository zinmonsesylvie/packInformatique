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
        return view('services.service');
    }


    public function showRegistrationForm() {
        $structures = Structure::all();
        return view('services.service', compact('structures'));
    }

    public function showRegistration() {
        $structures = Structure::all();
        return view('services.editservice', compact('structures'));
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
        return view('services.serviceall');
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
       // Récupérer le service par son ID
       $service = Service::find($id);

       // Vérifier si le service existe
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }

    // Retourner la vue avec le service à éditer
    return view('services.editservice', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valider les données
    $validatedData = $request->validate([
        'libelle' => 'required|string|max:255',
    ]);

    // Récupérer la structure par son ID
    $service = Service::find($id);

    // Vérifier si la structure existe
    if (!$service) {
        return redirect()->back()->with('error', 'Service not found');
    }

    // Mettre à jour la structure
    $service->update($validatedData);

    // Rediriger avec un message de succès
    return view('services.serviceall');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le service par son ID
        $service = Service::findOrFail($id);

        // Supprimer le service
        $service->delete();

        // Redirection avec un message de succès
        return redirect()->route('afficherService');
    }
}
