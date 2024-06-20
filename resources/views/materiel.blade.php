<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des matériels</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <form class="form_containerm" action="{{ route('materiel') }}" method="POST">
        @csrf
        <h1 class="form_container_headingm">ENREGISTREMENT MATERIEL</h1>
        <label class="form_container_labelm" for="designation">Désignation</label>
        <input class="form_container_inputm" type="text" id="designation" name="designation" placeholder="designation" required>
        <label class="form_container_labelm" for="annee">Année de service</label>
        <input class="form_container_inputm" type="number" id="annee" name="annee_de_service" placeholder="Année de service" required>
        <label class="form_container_labelm" for="date">Date maximum d'acquisition</label>
        <input class="form_container_inputm" type="number" id="date" name="date_max_acquisition" placeholder="Date maximum d'acquisitio" required>
        <label class="form_container_labelm" for="fabriquant">Fabriquant</label>
        <input class="form_container_inputm" type="text" id="fabriquant" name="fabriquant" placeholder="abriquant" required>
        <label class="form_container_labelm" for="modele">Modèle</label>
        <input class="form_container_inputm" type="text" id="modele" name="modele" placeholder="Modèle" required>
        <label class="form_container_labelm" for="processeur">Processeur</label>
        <input class="form_container_inputm" type="text" id="processeur" name="processeur" placeholder="Processeur" required>
        <label class="form_container_labelm" for="memoire">Mémoire Ram</label>
        <input class="form_container_inputm" type="text" id="memoire" name="memoire_ram" placeholder="Mémoire Ram" required>
        <label class="form_container_labelm" for="capacite">Capacité disque dur</label>
        <input class="form_container_inputm" type="text" id="capacite" name="capacite_disque_dur" placeholder="Capacité disque dur" required>
        <label class="form_container_labelm" for="type">Type disque dur</label>
        <input class="form_container_inputm" type="text" id="type" name="type_disque_dur" placeholder="Type disque dur" required>
        <label class="form_container_labelm" for="duree">Durée de vie</label>
        <input class="form_container_inputm" type="number" id="duree" name="duree_de_vie" placeholder="Durée de vie" required>
        <label class="form_container_labelm" for="age">Age désuet</label>
        <input class="form_container_inputm" type="number" id="age" name="age_desuet" placeholder="Age désuet" required>
        <label class="form_container_labelm" for="temps">Temps maximum d'acquisition</label>
        <input class="form_container_inputm" type="number" id="temps" name="temps_max_acquisition" placeholder="Temps maximum d'acquisition" required>
        <label class="form_container_labelm" for="nom">Nom de l'agent</label>
        <input class="form_container_inputm" type="text" id="nom" name="nom" placeholder="Nom de l'agent" required>
        <label class="form_container_labelm" for="prenom">Prénom de l'agent</label>
        <input class="form_container_inputm" type="text" id="prenom" name="prenom" placeholder="Prénom de l'agent" required>
        <label class="form_container_labelm" for="email">Email de l'agent</label>
        <input class="form_container_inputm" type="email" id="email" name="email" placeholder="Email de l'agent" required>
        <label class="form_container_labelm" for="fonction">Fonction de l'agent</label>
        <input class="form_container_inputm" type="text" id="fonction" name="fonction" placeholder="Fonction de l'agent" required>
        <label class="form_container_labelm" for="etat_id">Etat</label>
        <select class="form_container_inputm" id="etat_id" name="etat_id" required>
                <option value="">Sélectionnez un état</option>
                @foreach ($etats as $etat)
                    <option value="{{ $etat->id }}">{{ $etat->libellé }}</option>
                @endforeach
            </select>
        <button class="form_container_buttonm" type="submit">Enregistrer</button>
    </form>
    </main>

</body>
</html>
