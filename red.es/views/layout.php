<?php  
require 'Filtro.php';
  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Red.es Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/IcoMoon-Free-master\Font\section.json">
    <!-- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


   <link rel="stylesheet" href="jquery-editable-select.css">
    
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- icon -->
    <link rel="icon" href="img/bg-img/Logo.ico">

        <script src="js/validar.js"></script>
    <link rel="stylesheet" href="views/estudiante/styles.css" />

  </head>
  <body style="background-color: #D9E4E8;">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="img/bg-img/Logo-letras.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="img/bg-img/Logo-r.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal" style="color: #ffffff"><?php echo $_SESSION['user']->usua_correo ?></h5>
                  <span><?php echo $_SESSION['user']->roll ?></span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <div class="dropdown-divider"></div>
                <a href=" ?controller=usuario&method=password&id_usuario=<?php echo $_SESSION['user']->id_usuario ?>" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Cambiar contraseña</p>
                  </div>
                </a>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Panel</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="?controller=estudiante">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">Estudiantes</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="?controller=actividad">
              <span class="menu-icon">
                <i class="mdi mdi-bookmark-plus-outline"></i>
              </span>
              <span class="menu-title">Actividades</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="?controller=hora">
              <span class="menu-icon">
                <i class="mdi mdi-alarm"></i>
              </span>
              <span class="menu-title">Horas</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarEstudiante; ?>  ;" class="nav-item menu-items">
            <a class="nav-link" href="?controller=lider">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Lideres</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarEstudiante; ?> ;" class="nav-item menu-items" >
            <a class="nav-link" href="?controller=programacion">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Programacion</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarEstudiante; ?>; " class="nav-item menu-items">
            <a class="nav-link" href="?controller=colegio">
              <span class="menu-icon">
                <i class="mdi mdi-bank"></i>
              </span>
              <span class="menu-title">Colegios</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarEstudiante_lider; ?> ;" class="nav-item menu-items">
            <a class="nav-link" href="?controller=grado">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Grados</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarE_l_I; ?> ; " class="nav-item menu-items">
            <a class="nav-link" href="?controller=usuario">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-account"></i>
              </span>
              <span class="menu-title">Usuario</span>
            </a>
          </li>
          <li style="display: <?php echo $ocultarE_l_I; ?> ;" class="nav-item menu-items">
            <a class="nav-link" href="?controller=estado">
              <span class="menu-icon">
                <i class="mdi mdi-autorenew"></i>
              </span>
              <span class="menu-title">Estado</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notificaciones</h6>

                 <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success" > </i>
                      </div>
                    </div>

                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">
                      <p class="text-muted ellipsis mb-0"> </p>
                    </div>
                                
                  </a>
              </li>


              <li class="nav-item dropdown">

                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['user']->usua_correo ?></p>
                    <samp class="mdi mdi-menu-down d-none d-sm-block"></samp>
                  </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="?controller=login&method=Perfil">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Perfil</p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item" href="?controller=login&method=logout">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Salir</p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- Cuerpo -->
        <div class="main-panel" >
          <div class="content-wrapper">
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">




<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->

<script  src="https://cdn.datable.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script  src="https://cdn.datable.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
      language:{
        processing: "Tratamiento en curso...",
        search:     "Buscar&nbsp;:",
        lengthMenu:    "Agrupar de _MENU_ items",
        info:           "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
        infoEmpty:      "No exixten datos que mostrar",
        infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
        infoPostFix:    "",
        loadingRecords: "Cargando...",
        zeroRecords:    "No se encontraron datos en su busqueda",
        emptyTable:     "No hay datos disponibles.",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Ultimo",
        },
        aria: {
            sortAscending:  ": active para ordenar la columna en orden ascendente",
            sortDescending: ": active para ordenar la columna en orden descendente"
        }
      },
      scrolly: 400,
      lengthMenu: [ [10, 25, -1], [10, 25, "ALL"] ],
    });
} );



</script>



  </body>
</html>
