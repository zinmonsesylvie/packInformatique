<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des structure</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form_container" action="{{ route('structure') }}" method="POST">
        @csrf
        <h2 class="form_container_heading">Formulaire d'enregistrement des structures</h2>
            <label class="form_container_label" for="libelle">Nom de la structure</label>
            <input class="form_container_input" type="text" id="libelle" name="libelle" required>
            <label class="form_container_label" for="sigle">Sigle</label>
            <input class="form_container_input" type="text" id="sigle" name="sigle" required>
            <label class="form_container_label" for="adresse">Adresse</label>
            <input class="form_container_input" type="text" id="adresse" name="adresse" required>
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>
</div>

</body>
</html>
