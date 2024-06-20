<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des services</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <h2>Formulaire d'enregistrement des services</h2>
    <form action="{{ route('service') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="libelle">Nom du service</label>
            <input type="text" id="libelle" name="libelle" required>
            <label for="structure_id">Structure :</label>
            <select class="form_container_input" id="service_id" name="service_id" required>
                <option value="">Sélectionnez un structure</option>
                @foreach ($structures as $structure)
                    <option value="{{ $structure->id }}">{{ $structure->libelle }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
</div>

</body>
</html>
