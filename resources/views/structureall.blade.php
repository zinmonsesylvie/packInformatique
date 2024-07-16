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
            <h2>Structures</h2>
            <div class="row">
              <div class=" grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped table-highlight">
                      <a href="{{ route('structure')}}" class="btn btn-success mb-3">Nouvelle structure<i class="bi bi-plus"></i></a>
                                <thead>
                                    <tr>
                                        <th>Numéro</th>
                                        <th>Libellé</th>
                                        <th>Sigle</th>
                                        <th>Adresse</th>
                                        <th>action1</th>
                                        <th>action2</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($structures as $structure)
                                        <tr>
                                            <td>{{ $structure->id }}</td>
                                            <td>{{ $structure->libelle }}</td>
                                            <td>{{ $structure->sigle }}</td>
                                            <td>{{ $structure->adresse }}</td>
                                            <td>
                                              <a href="{{ route('editStructure', $structure->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                                            </td>
                                            <td>
                                              <a href="{{route('destroyStructure', $structure->id)}}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Etes-vous sûr de vouloir supprimer cette structure?')">delete</a>
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
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>
    <script src="vendors/flot/jquery.flot.categories.js"></script>
    <script src="vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

