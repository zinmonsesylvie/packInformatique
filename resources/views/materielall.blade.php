<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .table-responsive {
            overflow-x: auto;
        }
        .table th, .table td {
            white-space: nowrap;
            padding: 0.5rem; /* Reduced padding */
            font-size: 0.875rem; /* Smaller font size */
        }
        .table th:nth-child(1), .table td:nth-child(1) {
            width: 50px; /* Fixed width for first column */
        }
        .table th:nth-child(2), .table td:nth-child(2) {
            width: 150px; /* Fixed width for designation */
        }
        .table th:nth-child(3), .table td:nth-child(3) {
            width: 100px; /* Fixed width for annee de service */
        }
        .table th:nth-child(4), .table td:nth-child(4) {
            width: 150px; /* Fixed width for date max acquisition */
        }
        .table th:nth-child(5), .table td:nth-child(5) {
            width: 100px; /* Fixed width for fabriquant */
        }
        .table th:nth-child(6), .table td:nth-child(6) {
            width: 100px; /* Fixed width for modele */
        }
        /* Continue for other columns as needed */
    </style>
</head>
<body>
<div class="container-scroller">
    @include('partials.sidebar')
    <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles light"></div>
                <div class="tiles dark"></div>
            </div>
        </div>
        @include('partials.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <h2>Matériels</h2>
                <div class="row">
                    <div class="grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-highlight table-sm table-responsive">
                                        <a href="{{ route('materiel')}}" class="btn btn-success mb-3">Nouvel materiel<i class="bi bi-plus"></i></a>
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Désignation</th>
                                                <th>Année de Service</th>
                                                <th>Date Max Acquisition</th>
                                                <th>Fabricant</th>
                                                <th>Modèle</th>
                                                <th>Processeur</th>
                                                <th>Mémoire RAM</th>
                                                <th>Capacité Disque Dur</th>
                                                <th>Type Disque Dur</th>
                                                <th>Durée de Vie</th>
                                                <th>Âge Désuet</th>
                                                <th>Temps Max Acquisition</th>
                                                <th>Agent ID</th>
                                                <th>Action1</th>
                                                <th>Action2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($materiels as $materiel)
                                                <tr>
                                                    <td>{{ $materiel->id }}</td>
                                                    <td>{{ $materiel->designation }}</td>
                                                    <td>{{ $materiel->annee_de_service }}</td>
                                                    <td>{{ $materiel->date_max_acquisition }}</td>
                                                    <td>{{ $materiel->fabriquant }}</td>
                                                    <td>{{ $materiel->modele }}</td>
                                                    <td>{{ $materiel->processeur }}</td>
                                                    <td>{{ $materiel->memoire_ram }}</td>
                                                    <td>{{ $materiel->capacite_disque_dur }}</td>
                                                    <td>{{ $materiel->type_disque_dur }}</td>
                                                    <td>{{ $materiel->duree_de_vie }}</td>
                                                    <td>{{ $materiel->age_desuet }}</td>
                                                    <td>{{ $materiel->temps_max_acquisition }}</td>
                                                    <td>{{ $materiel->agent_id }}</td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>
</div>
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- Plugin js for this page -->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="vendors/flot/jquery.flot.js"></script>
<script src="vendors/flot/jquery.flot.resize.js"></script>
<script src="vendors/flot/jquery.flot.categories.js"></script>
<script src="vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="vendors/flot/jquery.flot.stack.js"></script>
<script src="vendors/flot/jquery.flot.pie.js"></script>
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<!-- Custom js for this page -->
<script src="js/dashboard.js"></script>
</body>
</html>
