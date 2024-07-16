

@extends('layouts/template')

@section('content')


<h1 class="app-page-title">Logiciels</h1>

    <div class="col-sm-12 col-md-6">
        <div class="app-card app-card-settings shadow-sm p-4">

            <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{ route('updateLogiciel', $logiciel->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="setting-input-1" class="form-label">Libelle<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        </svg></span></label>
                        <input type="text" class="form-control" id="setting-input-1" placeholder="Entrez le libelle " name="libelle" value="{{ $logiciel->libelle }}" >
                        @error('libelle')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-2" class="form-label">Licence</label>
                        <input type="text" class="form-control" id="setting-input-2" placeholder="Entrez la licence" name="licence" value="{{ $logiciel->licence }}" >
                        @error('licence')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-3" class="form-label"> Version</label>
                        <input type="text" class="form-control" id="setting-input-3" name="version" placeholder="Entrez la version" value="{{ $logiciel->version }}" >
                        @error('version')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-4" class="form-label"> Editeur</label>
                        <input type="text" class="form-control" id="setting-input-4" name="editeur" placeholder="Entrez l'editeur" value="{{ $logiciel->editeur }}">
                        @error('editeur')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-5" class="form-label"> Date d'achat de la licence</label>
                        <input type="text" class="form-control" id="setting-input-5" name="date_achat_licence" placeholder="Entrez la date d'achat de la licence" value="{{ $logiciel->date_achat_licence }}">
                        @error('date d\'achat de la licence')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="setting-input-6" class="form-label"> Date d'expiration de la licence</label>
                        <input type="text" class="form-control" id="setting-input-6" name="date_expiration" placeholder="Entrez la date d'expiration de la licence" value="{{ $logiciel->date_expiration }}">
                        @error('date d\'expiration de la licence')
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



