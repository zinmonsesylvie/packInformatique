<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des structure</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form_container" action="{{ route('updateStructure', $structure->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="form_container_heading">Formulaire de modification des structures</h2>
            <label class="form_container_label" for="libelle">Nom de la structure</label>
            <input class="form_container_input" type="text" id="libelle" name="libelle" value="{{ $structure->libelle }}" required>
            <label class="form_container_label" for="sigle">Sigle</label>
            <input class="form_container_input" type="text" id="sigle" name="sigle" value="{{ $structure->sigle }}" required>
            <label class="form_container_label" for="adresse">Adresse</label>
            <input class="form_container_input" type="text" id="adresse" name="adresse" value="{{ $structure->adresse }}" required>
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>
</div>
</body>
<style>
    /* Style global pour le formulaire */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f2f5;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.form_container {
    max-width: 400px;
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

/* Style pour le titre du formulaire */
.form_container_heading {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

/* Style pour les labels */
.form_container_label {
    font-size: 16px;
    color: #333;
    font-weight: bold;
    align-self: flex-start;
}

/* Style pour les champs de saisie */
.form_container_input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* Style pour le bouton de soumission */
.form_container_button {
    width: auto;
    padding: 10px 20px;
    background-color: #24649c;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    align-self: flex-start;
}

/* Effet au survol du bouton */
.form_container_button:hover {
    background-color: #24649c;
}

/* Style pour les liens */
.form_links {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
}

.form_link {
    color: #145ead;
    text-decoration: none;
    font-size: 14px;
}

.form_link:hover {
    text-decoration
}
</style>
</html>
