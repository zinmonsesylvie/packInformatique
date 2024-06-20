<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion des utilisateurs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
    <form class="form_container" action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="form_container_heading">CONNEXION</h2>
        <label class="form_container_label" for="email">Email</label>
        <input class="form_container_input" type="email" id="email" name="email" placeholder="Adresse email" required>
        <label class="form_container_label" for="password">Mot de passe</label>
        <input class="form_container_input" type="password" id="password" name="password" placeholder="Mot de passe" required>
        <button class="form_container_button" type="submit">Connexion</button>
        <div class="form_links">
                <a href="#" class="form_link">Mot de passe oublié ?</a>
                <a href="register" class="form_link">Vous n'avez pas de compte ? <strong>S'inscrire</strong></a>
        </div>
    </form>
    </main>
</body>
</html>
