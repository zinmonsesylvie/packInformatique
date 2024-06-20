<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription des utilisateurs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <form class="form_container" action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="form_container_heading">INSCRIPTION</h2>
        <label class="form_container_label" for="nom">Nom</label>
        <input class="form_container_input" type="text" id="nom" name="nom" placeholder="Nom" required>
        <label class="form_container_label" for="prenom">Prénom</label>
        <input class="form_container_input" type="text" id="prenom" name="prenom" placeholder="Prenom" required>
        <label class="form_container_label" for="email">Email</label>
        <input class="form_container_input" type="email" id="email" name="email" placeholder="Adresse email" required>
        <label class="form_container_label" for="password">Mot de passe</label>
        <input class="form_container_input" type="password" id="password" name="password" placeholder="Mot de passe" required>
        <label class="form_container_label" for="fonction">Fonction</label>
        <input class="form_container_input" type="text" id="fonction" name="fonction" placeholder="Fonction" required>
        <label class="form_container_label" for="service_id">Service</label>
        <select class="form_container_input" id="service_id" name="service_id" required>
                <option value="">Sélectionnez un service</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->libelle }}</option>
                @endforeach
            </select>
        <button class="form_container_button" type="submit">Enregistrer</button>
    </form>
    </main>

</body>
</html>
