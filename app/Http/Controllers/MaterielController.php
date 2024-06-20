<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Etat;
use App\Models\Agent;
use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Models\Changementetat;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Materiel::all();
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materiel');
    }

    public function showRegistrationForm() {
        $etats = Etat::all();
        return view('materiel', compact('etats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required|string|max:255',
            'annee_de_service' => 'required|integer',
            'date_max_acquisition' => 'required|integer',
            'fabriquant' => 'required|string',
            'modele' => 'required|string',
            'processeur' => 'required|string',
            'memoire_ram' => 'required|string',
            'capacite_disque_dur' => 'required|string',
            'type_disque_dur' => 'required|string',
            'duree_de_vie' => 'required|integer',
            'age_desuet' => 'required|integer',
            'temps_max_acquisition' => 'required|integer',
            'etat_id' => 'required|integer',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'service_id' => 'required',
        ]);

        //création de l'agent

        //création du matériel
        $materiel = New Materiel();
        $materiel->designation = $request->designation;
        $materiel->annee_de_service = $request->annee_de_service;
        $materiel->date_max_acquisition = $request->date_max_acquisition;
        $materiel->fabriquant = $request->fabriquant;
        $materiel->modele = $request->modele;
        $materiel->processeur = $request->processeur;
        $materiel->memoire_ram = $request->memoire_ram;
        $materiel->capacite_disque_dur = $request->capacite_disque_dur;
        $materiel->type_disque_dur = $request->type_disque_dur;
        $materiel->duree_de_vie = $request->duree_de_vie;
        $materiel->age_desuet = $request->age_desuet;
        $materiel->temps_max_acquisition = $request->temps_max_acquisition;
        $agent = New Agent();
        $agent->nom = $request->nom;
        $agent->prenom = $request->prenom;
        $agent->email = $request->email;
        $agent->fonction = $request->fonction;
        $agent->service_id = $request->service_id;
        $agent->saved();
        $materiel->agent_id = $agent->id;
        $materiel->etat_id = $request->etat_id;
        dd('$materiel');
        $materiel->save();
        return response()->json('materiel enregistré avec succès',200);
    }

    public function changement(){
        $annee_actuelle = Carbon::now()->year;
        $materiels = Materiel::all();
        $ab=[];
        foreach ($materiels as $materiel) {
            $ab[]= $materiel->annee_de_service;
        }
        $annee_de_service = $ab[0];
        $age = $annee_actuelle - $annee_de_service;
        dd($annee_de_service);
        if($age >= $materiel->duree_de_vie){
            $materiel->etat_id = 'amortie';
        }
        else if($age = $materiel->age_desuet){
            $materiel->etat_id = 'desuet';
        }
        else{
            $materiel->etat_id = 'non fonctionnel';
        }
        $changement = New Changementetat();
        $changement->date_changement = $request->date_changement;
        $changement->save();
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
