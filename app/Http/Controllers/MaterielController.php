<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiels = Materiel::all();
        return view('materielall', compact('materiels'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materiel');
    }

    public function showRegistrationForm() {
        $agents = Agent::all();
    
        return view('materiel', compact('agents'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validation des champs de la requête
    $request->validate([
        'designation' => 'required|string|max:255',
        'annee_de_service' => 'required|integer',
        'date_max_acquisition' => 'required|integer',
        'fabriquant' => 'required|string|max:255',
        'modele' => 'required|string|max:255',
        'processeur' => 'required|string|max:255',
        'memoire_ram' => 'required|string|max:255',
        'capacite_disque_dur' => 'required|string|max:255',
        'type_disque_dur' => 'required|string|max:255',
        'agent_id' => 'required|integer',
    ]);

    // Création d'une nouvelle instance de Materiel
    $materiel = new Materiel();
    $materiel->designation = $request->designation;
    $materiel->annee_de_service = $request->annee_de_service;
    $materiel->date_max_acquisition = $request->date_max_acquisition;
    $materiel->fabriquant = $request->fabriquant;
    $materiel->modele = $request->modele;
    $materiel->processeur = $request->processeur;
    $materiel->memoire_ram = $request->memoire_ram;
    $materiel->capacite_disque_dur = $request->capacite_disque_dur;
    $materiel->type_disque_dur = $request->type_disque_dur;

    // Assignation de duree_de_vie en fonction de la designation
    if ($materiel->designation == 'Ordinateur de bureau') {
        $materiel->duree_de_vie = 6;
    } elseif ($materiel->designation == 'Ordinateur portable') {
        $materiel->duree_de_vie = 4;
    } elseif ($materiel->designation == 'Imprimante') {
        $materiel->duree_de_vie = 5;
    } elseif ($materiel->designation == 'Copieur') {
        $materiel->duree_de_vie = 5;
    } elseif ($materiel->designation == 'Scanner') {
        $materiel->duree_de_vie = 7;
    } else {
        $materiel->duree_de_vie = 0; // Valeur par défaut
    }

    // Calcul des champs dérivés
    $materiel->age_desuet = $materiel->duree_de_vie * 2;
    $materiel->temps_max_acquisition = $materiel->duree_de_vie + 2;
    $materiel->agent_id = $request->agent_id;
    $materiel->user_id = Auth::user()->id;

    // Enregistrement de l'instance de Materiel
    $materiel->save();

    // Redirection ou retour de la vue
    return view('materielall');
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
