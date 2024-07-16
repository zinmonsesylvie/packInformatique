<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des logiciels</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form_container" action="{{ route('logiciel') }}" method="POST">
        @csrf
        <h2 class="form_container_heading">Formulaire d'enregistrement des logiciels</h2>
            <label class="form_container_label" for="libelle">Libelle</label>
            <input class="form_container_input" type="text" id="libelle" name="libelle" required>
            <label class="form_container_label" for="licence">Licence</label>
            <input class="form_container_input" type="text" id="licence" name="licence" required>
            <label class="form_container_label" for="version">Version</label>
            <input class="form_container_input" type="text" id="version" name="version" required>
            <label class="form_container_label" for="editeur">Editeur</label>
            <input class="form_container_input" type="text" id="editeur" name="editeur" required>
            <label class="form_container_label" for="date_achat_licence">Date d'achat des licences</label>
            <input class="form_container_input" type="number" id="date_achat_licence" name="date_achat_licence" required>
            <label class="form_container_label" for="date_expiration">Date d'expiration</label>
            <input class="form_container_input" type="number" id="date_expiration" name="date_expiration" required>
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>
</div>

</body>
</html>
