<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des maintenances</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form_container" action="{{ route('maintenance') }}" method="POST">
        @csrf
        <h1 class="form_container_heading">ENREGISTREMENT DES MAINTENANCES</h1>
        
        <div class="form_row">
            <div class="form_column">
                <label class="form_container_label" for="nom_intervenant">Nom de l'intervenant</label>
                <input class="form_container_input" type="text" id="nom_intervenant" name="nom_intervenant" placeholder="Processeur" required>
                
                <label class="form_container_label" for="prenom_intervenant">Prénom de l'intervenant</label>
                <input class="form_container_input" type="text" id="prenom_intervenant" name="prenom_intervenant" placeholder="Mémoire Ram" required>
                
                <label class="form_container_label" for="nom_structure">Nom de la structure</label>
                <input class="form_container_input" type="text" id="nom_structure" name="nom_structure" placeholder="Nom de la structure" required>
                
            </div>
            
            <div class="form_column">
                <label class="form_container_label" for="objet_de_maintenance">Objet de maintenance</label>
                <input class="form_container_input" type="text" id="objet_de_maintenance" name="objet_de_maintenance" placeholder="Objet de maintenance" required>
                
                <label class="form_container_label" for="type_de_maintenance">Type de maintenance</label>
                <input class="form_container_input" type="number" id="type_de_maintenance" name="type_de_maintenance" placeholder="Type de maintenance" required>
                
                <label class="form_container_label" for="date_de_maintenance">Date de maintenance</label>
                <input class="form_container_input" type="number" id="date_de_maintenance" name="date_de_maintenance" placeholder="Date de maintenance" required>
                
                <label class="form_container_label" for="materiel_id">Matériel</label>
                <select class="form_container_input" id="materiel_id" name="materiel_id" required>
                    <option value="">Sélectionnez un matériel</option>
                    @foreach ($materiels as $materiel)
                        <option value="{{ $materiel->id }}">{{ $materiel->designation }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>
</body>
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
</html>
