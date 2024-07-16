
@extends('layouts/template')

@section('content')


<h1 class="app-page-title">Utilisateur de matériel</h1>

    <div class="col-sm-12 col-md-6">
        <div class="app-card app-card-settings shadow-sm p-4">

            <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{ route('updateAgent', $agent->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="setting-input-1" class="form-label">Nom<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        </svg></span></label>
                        <input type="text" class="form-control" id="setting-input-1" placeholder="Entrez le nom " name="nom" value="{{ $agent->nom }}">
                        @error('nom')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-2" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="setting-input-2" placeholder="Entrez le prénom" name="prenom" value="{{ $agent->prenom }}" >
                        @error('prenom')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-3" class="form-label"> Email</label>
                        <input type="email" class="form-control" id="setting-input-3" name="email" placeholder="Entrez l'adresse mail" value="{{ $agent->email }}">
                        @error('email')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-4" class="form-label"> Fonction</label>
                        <input type="text" class="form-control" id="setting-input-4" name="fonction" placeholder="Entrez la fonction" value="{{ $agent->fonction }}" >
                        @error('fonction')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-5" class="form-label">Service</label>
                        <select class="form-control" id="setting-input-5" name="service_id" required>
                            <option value="">Sélectionnez un service</option>
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}" {{ $agent->service_id == $service->id ? 'selected' : '' }}>{{ $service->libelle }}</option>
                            @endforeach
                        </select>
                        @error('service_id')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn app-btn-primary" >Enregistrer</button>
                </form>
            </div><!--//app-card-body-->

        </div><!--//app-card-->
    </div>
</div><!--//row-->


@endsection

