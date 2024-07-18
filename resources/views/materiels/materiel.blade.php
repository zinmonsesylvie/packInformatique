
@extends('layouts/template')

@section('content')

<select id="choixFormulaire">
    <option value=""></option>
    <option value="form1">Formulaire 1</option>
    <option value="form2">Formulaire 2</option>
    <option value="form3">Formulaire 3</option>
</select>

<form id="form1" style="display: none;">
    <!-- Contenu du formulaire 1 -->
    <div class="mb-3">
        <label for="setting-input-1" class="form-label">Nom<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
        <circle cx="8" cy="4.5" r="1"/>
        </svg></span></label>
        <input type="text" class="form-control" id="setting-input-1" placeholder="Entrez le nom " name="nom" value="" >
        @error('nom')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="setting-input-2" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="setting-input-2" placeholder="Entrez le prénom" name="prenom" value="">
        @error('prenom')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="setting-input-3" class="form-label"> Email</label>
        <input type="email" class="form-control" id="setting-input-3" name="email" placeholder="Entrez le mail" value="">
        @error('email')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="setting-input-3" class="form-label">Contact</label>
        <input type="text" class="form-control" id="setting-input-3" name="contact" placeholder="Entrez le contact" value="">
        @error('contact')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</form>

<form id="form2" style="display: none;">
    <!-- Contenu du formulaire 2 -->
    <div class="mb-3">
        <label for="setting-input-3" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="setting-input-3" name="contact" placeholder="Entrez le contact" value="">
        @error('contact')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</form>

<form id="form3" style="display: none;">
    <!-- Contenu du formulaire 3 -->
</form>

<script >

   document.getElementById('choixFormulaire').addEventListener('change', function() {
    var choix = this.value;

    // Masquer tous les formulaires
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form3').style.display = 'none';

    // Afficher le formulaire sélectionné
    document.getElementById(choix).style.display = 'block';
});


</script>




@endsection
