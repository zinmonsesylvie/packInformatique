
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Agents</title>
    <style>
        body {
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;

            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Changez cette couleur selon vos besoins */
            color: #333; /* Changez cette couleur selon vos besoins */
        }
        .table-container {
            width: 100%;
            overflow-x: auto; /* Pour permettre le défilement horizontal si nécessaire */
        }
    </style>
</head>
<body>
    <h1>Liste des Agents</h1>


    <div class="table-container">
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>

                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Fonction</th>
                                        <th>Service</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($agents as $agent)
                                        <tr>

                                           <td>{{ $agent->nom }}</td>
                                           <td>{{ $agent->prenom }}</td>
                                           <td>{{ $agent->email }}</td>
                                           <td>{{ $agent->fonction }}</td>
                                           <td >{{$agent->service->libelle }}</td>

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
    </div>

</div><!--//app-wrapper-->


</body>
</html>
