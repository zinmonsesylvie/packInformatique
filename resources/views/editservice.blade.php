<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des services</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form_container" action="{{ route('updateService', $service->id) }}" method="POST">
        @csrf
        @method(PUT)
        <h2 class="form_container_heading">Formulaire d'enregistrement des services</h2>
            <label  class="form_container_label" for="libelle">Nom du service</label>
            <input  class="form_container_input" type="text" id="libelle" name="libelle" value="{{$service->libelle}}" required>
            <label class="form_container_label" for="structure_id">Structure</label>
            <select class="form_container_input" id="structure_id" name="structure_id" value="{{$service->structure_id}}" required>
                <option value="">Sélectionnez un structure</option>
                @foreach ($structures as $structure)
                    <option value="{{ $structure->id }}">{{ $structure->libelle }}</option>
                @endforeach
            </select>
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>

</body>
</html>
