<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Service;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agents.agentall', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('agents.agent', compact('services'));
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

        return view('agents.agentall');
        
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
        // Récupérer la structure par son ID
        $agent = Agent::find($id);

        // Retourner la vue avec la structure à éditer
        return view('agents.editagent', compact('agent','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valider les données
    $agent->nom = $request->nom;
    $agent->prenom = $request->prenom;
    $agent->email = $request->email;
    $agent->fonction = $request->fonction;
    $agent->service_id = $request->service_id;
    $agent->update();

    // Rediriger avec un message de succès
    return redirect()->route("afficherAgent")->with("success","Les informations de l'agent  ont été mise à jour");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Agent $agent ){
        $agent->delete();
        return redirect()->route("afficherAgent")->with("success","Agent supprimer avec succès");
    }


    public function exportPDF()
    {
        $agents = Agent::all();
        $pdf = Pdf::loadView('agents.pdf', compact('agents'));
        return $pdf->download('agents.pdf');
    }
}
