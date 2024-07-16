
@extends('layouts/template')

@section('content')

    <form class="form_container" action="{{ route('materiel') }}" method="POST">
        @csrf
        <h1 class="form_container_heading">ENREGISTREMENT MATERIEL</h1>
        
        <div class="form_row">
            <div class="form_column">
                <label class="form_container_label" for="designation">Désignation</label>
                <input class="form_container_input" type="text" id="designation" name="designation" placeholder="Désignation" required>
                
                <label class="form_container_label" for="annee">Année de service</label>
                <input class="form_container_input" type="number" id="annee" name="annee_de_service" placeholder="Année de service" required>
                
                <label class="form_container_label" for="date">Date maximum d'acquisition</label>
                <input class="form_container_input" type="number" id="date" name="date_max_acquisition" placeholder="Date maximum d'acquisition" required>
                
                <label class="form_container_label" for="fabriquant">Fabriquant</label>
                <input class="form_container_input" type="text" id="fabriquant" name="fabriquant" placeholder="Fabriquant" required>
                
                <label class="form_container_label" for="modele">Modèle</label>
                <input class="form_container_input" type="text" id="modele" name="modele" placeholder="Modèle" required>
            </div>
            
            <div class="form_column">
                <label class="form_container_label" for="processeur">Processeur</label>
                <input class="form_container_input" type="text" id="processeur" name="processeur" placeholder="Processeur" required>
                
                <label class="form_container_label" for="memoire">Mémoire Ram</label>
                <input class="form_container_input" type="text" id="memoire" name="memoire_ram" placeholder="Mémoire Ram" required>
                
                <label class="form_container_label" for="capacite">Capacité disque dur</label>
                <input class="form_container_input" type="text" id="capacite" name="capacite_disque_dur" placeholder="Capacité disque dur" required>
                
                <label class="form_container_label" for="type">Type disque dur</label>
                <input class="form_container_input" type="text" id="type" name="type_disque_dur" placeholder="Type disque dur" required>
                
                <label class="form_container_label" for="agent_id">Agent</label>
                <select class="form_container_input" id="agent_id" name="agent_id" required>
                    <option value="">Sélectionnez un agent</option>
                    @foreach ($agents as $agent)
                        <option value="{{ $agent->id }}">{{ $agent->nom }} {{ $agent->prenom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>

<style>
   body {
    font-family: Arial, sans-serif;
}

.form_container {
    display: flex;
    flex-direction: column;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.form_container_heading {
    text-align: center;
    margin-bottom: 20px;
}

.form_row {
    display: flex;
    justify-content: space-between;
    gap: 50px; /* Espace entre les colonnes */
}

.form_column {
    display: flex;
    flex-direction: column;
    width: 48%;
}

.form_container_label {
    margin-top: 20px;
    font-weight: bold;
}

.form_container_input {
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

.form_container_button {
    margin-top: 20px;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    align-self: center;
}

.form_container_button:hover {
    background-color: #218838;
}

</style>
@endsection