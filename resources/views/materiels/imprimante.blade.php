@extends('layouts/template')

@section('content')



            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Matériels</h1>
                </div>
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>

                            </div><!--//col-->
                            <div class="col-auto">

                                <select class="form-select w-auto" >
                                      <option selected value="option-1">All</option>
                                      <option value="option-2">This week</option>
                                      <option value="option-3">This month</option>
                                      <option value="option-4">Last 3 months</option>

                                </select>
                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
      <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
    </svg>
                                Télécharger le tableau
                                </a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->


            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Désignation</th>
                                            <th>Année de mise en Service</th>
                                            <th>Date de fin de vie</th>
                                            <th>Fabricant</th>
                                            <th>Modèle</th>
                                            <th>Durée de Vie</th>
                                            <th>Âge Désuet</th>
                                            <th>Temps Max Acquisition</th>
                                            <th>Utilisateur</th>
                                            <th>Action1</th>
                                            <th>Action2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($imprimantes as $imprimante)
                                    <tr>
                                        <td>{{ $imprimante->id }}</td>
                                        <td>{{ $imprimante->designation }}</td>
                                        <td>{{ $imprimante->annee_de_service }}</td>
                                        <td>{{ $imprimante->date_max_acquisition }}</td>
                                        <td>{{ $imprimante->fabriquant }}</td>
                                        <td>{{ $imprimante->modele }}</td>
                                        <td>{{ $imprimante->duree_de_vie }}</td>
                                        <td>{{ $imprimante->age_desuet }}</td>
                                        <td>{{ $imprimante->temps_max_acquisition }}</td>
                                        <td>{{ $ordinateur->agent->nom }} {{ $ordinateur->agent->prenom }}</td>
                                        <td>
                                            <a href="{{ route('editMateriel', $materiel->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('destroyMateriel', $materiel->id)}}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce materiel?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->

                    <nav class="app-pagination">

                    </nav><!--//app-pagination-->
                </div><!--//tab-pane-->


            </div><!--//tab-content-->





</div><!--//app-wrapper-->

@endsection
