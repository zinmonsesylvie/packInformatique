@extends('layouts.template')

@section('content')

<h1 class="app-page-title">Services</h1>

<div class="col-sm-12 col-md-6">
    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            <form class="settings-form" method="POST" action="{{ route('updateService', $service->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Libelle
                        <span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg>
                        </span>
                    </label>
                    <input type="text" class="form-control" id="setting-input-1" placeholder="Entrez le libelle" name="libelle" value="{{ $service->libelle }}">
                    @error('libelle')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Structure</label>
                    <select class="form-control" id="setting-input-2" name="structure_id" id="structure_id" required>
                        <option value=""></option>
                        @foreach ($structures as $structure)
                        <option value="{{ $structure->id }}" {{ $service->structure_id === $structure->id ? 'selected' : '' }}>{{ $structure->libelle }}</option>
                        @endforeach
                    </select>
                    @error('structure_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn app-btn-primary">Enregistrer</button>
            </form>
        </div><!--//app-card-body-->
    </div><!--//app-card-->
</div><!--//row-->

@endsection
