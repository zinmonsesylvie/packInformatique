<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des structure</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <h2>Formulaire d'enregistrement des structure</h2>
    <form action="{{ route('structure') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="libelle">Nom de structure:</label>
            <input type="text" id="libelle" name="libelle" required>
            <label for="sigle">Sigle</label>
            <input type="text" id="sigle" name="sigle" required>
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" required>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
</div>

</body>
</html>
