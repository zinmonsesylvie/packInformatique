<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agentall', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agent');
    }

    public function showRegistrationForm() {
        $services = Service::all();
        return view('agent', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string|email|unique:agents,email',
            'fonction' => 'required|string',
            'service_id' => 'required|integer',
        ]);

        $agent = New Agent();
        $agent->nom = $request->nom;
        $agent->prenom = $request->prenom;
        $agent->email = $request->email;
        $agent->fonction = $request->fonction;
        $agent->service_id = $request->service_id;
        $agent->save();

        return view('agentall');
        
    }

    //récupération des utilisateurs qui on eu a utiliser un matériel 
    public function récupération(){
        
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
        // Valider les données
    $validatedData = $request->validate([
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|string|email|unique:agents,email',
        'fonction' => 'required|string',
        'service_id' => 'required|integer',
    ]);

    // Récupérer la structure par son ID
    $agent = Agent::find($id);

    // Vérifier si la structure existe
    if (!$agent) {
        return redirect()->back()->with('error', 'Agent not found');
    }

    // Mettre à jour la structure
    $agent->update($validatedData);

    // Rediriger avec un message de succès
    return view('agentall');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
