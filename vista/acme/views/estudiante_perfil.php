<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Estudiante | Perfil </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#2D506C;
  border-top: #EFB351;
  border: 4px;
  border-top: 5px solid rgb(237, 178, 59);
  border-bottom: 5px solid rgb(237, 178, 59);">

  <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars bg-white"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="color:white;">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="color:white;">Personero</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="color:white;">Contralor</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="color:white;">Jurado</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../views/reportes.html" class="nav-link" style="color:white;">Reportes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  <!-- ./Left navbar links -->

  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search bg-white "></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search bg-white"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times bg-white "></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    <!-- ./Navbar Search -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#2D506C;">

    <!-- Brand Logo -->
      <a href="../acmefront/index.html" class="brand-link">
        <img src="../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
        <span class="brand-text font-weight-light">ACME System</span>
      </a>
    <!-- ./Brand Logo -->
  
    <!-- Sidebar -->
      <div class="sidebar">
  
      <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="./se_perfil.html" class="d-block">Alexander Predonel</a>
          </div>
        </div>
      <!-- ./Sidebar user (optional) -->
  
      <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
      <!-- ./SidebarSearch Form -->
  
      <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Menu options to hhref pages -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Modos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Clásico </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Oscuro</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Light</p>
                  </a>
                </li>
              </ul>
            </li>
          <!-- ./Menu options to hhref pages -->
  
          <!-- Menu votation hhref pages -->
            <li class="nav-item">
              <a href="./tarjeton.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Votación
                  <span class="right badge badge-danger">Nuevo</span>
                </p>
              </a>
            </li>
          <!-- ./Menu votation hhref pages -->
  
          <!-- Menu academic hhref pages -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Académico
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../cursos.html" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>Cursos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tareas.html" class="nav-link">
                    <i class="fas fa-file nav-icon"></i>
                    <p>Tareas</p>
                  <span class="badge badge-danger right">3</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/boxed.html" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>CV académico</p>
                  </a>
                </li>
              </ul>
            </li>
          <!-- ./Menu academic hhref pages -->
          
          <!-- Menu otros href pages -->
            <li class="nav-header">Otros</li>
  
            <li class="nav-item">
              <a href="./calendario.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendario
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
  
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Chats
                </p>
              </a>
            </li>
  
            <li class="nav-item">
              <a href="./logout.html" class="nav-link">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>
                  Salir
                </p>
              </a>
            </li>
          <!-- ./Menu other href pages -->
          </ul>
        </nav>
  
      <!-- /.sidebar-menu -->
  
      </div>
    <!-- /.sidebar -->
  
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil del Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./change-password-v2.html">Cambiar contraseña</a></li>
              <li class="breadcrumb-item active">Perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/avatar5.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['usuario']; ?></h3>

                <p class="text-muted text-center">Estudiante</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Seguidores</b> <a class="float-right">322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Siguienfo</b> <a class="float-right">43</a>
                  </li>
                  <li class="list-group-item">
                    <b>Siguiendo</b> <a class="float-right">287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Tareas</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-default">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#información" data-toggle="tab">Información</a></li>
                  <li class="nav-item"><a class="nav-link" href="#edit" data-toggle="tab">Editar</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="información">
                    <strong><i class="fas fa-book mr-1"></i> Grado</strong>
                    <p class="text-muted">
                      Undécimo
                    </p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Dirección</strong>
                      <p class="text-muted">
                        <span class="tag tag-danger">Malibu, California</span><br>
                        <span class="tag tag-success">Calle: Siempre viva Apto: 22</span>
                      </p>
                    <hr>
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>
                    <p class="text-muted">
                      <span class="tag tag-danger">Puntualidad</span><br>
                      <span class="tag tag-success">Compromiso</span><br>
                      <span class="tag tag-info">Resposabilidad</span>
                    </p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>
                    <p class="text-muted text-danger">Pendiente reunión con padres de familia.</p>
                  </div>

                  <div class="tab-pane" id="edit">
                    <form class="form-horizontal" method="post" id="quickForm">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name"  placeholder="Alexander Pedronel" value="Alexander Pedronel">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email"  placeholder="alexandrelpedronel@acme.edu.co" value="alexandrelpedronel@acme.edu.co">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                          <input type="number"  name="tel" id="tel" class="form-control" id="inputTelefono" placeholder="3012345689" value="3012345689" minlength="10" maxlength="10">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Género</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="gen" id="gen"  placeholder="Masculino" value="Masculino">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Dirección</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="dir" id="dir"  placeholder="Malibu, California - Calle: Siempre viva Apto: 22" value="Malibu, California - Calle: Siempre viva Apto: 22"></input>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox" id="agreeTerms" name="terms" >
                            <label for="agreeTerms">
                              <input type="checkbox"> Acepto <a href="#">términos y condiciones</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modal-default" id="btnSave">
                          Editar
                        </button>
                      </div>
                    </form>
                  </div>
                </div>        
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> Beta
    </div>
    <strong>&copy; 2024-2028 <a href="https://adminlte.io">Bits-</a>to learning</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<div class="modal" tabindex="-1" role="dialog" id="modal-default">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alerta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirma que deseas editar la información de este perfil</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success toastrDefaultSuccess" data-dismiss="modal">
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- Page specific script -->
<script>
 $(function () {
  $.validator.setDefaults({
      submitHandler: function () {
        $('#modal-default').on('shown.bs.modal', function () {
          $('#btnSave').trigger('focus')
        })

    $('.toastrDefaultSuccess').click(function() {
      $('#modal-default').hide()
      trigger: false,
      toastr.success('Perfil actualizado con exito.')

    });
      }
    });
    $('#quickForm').validate({
      rules: {
        name: {
          required: true,
          //codigo: true,
        },
        email: {
          required: true,
          email: true
        },
        gen: {
          required: true,
        },
        tel: {
          required: true,
          maxlength: 10,
          minlength: 10,
        },
        dir: {
          required: true,
        },
        terms: {
          required: true,
        },
      },
      messages: {
        name: {
          required: "         Por favor, ingrese su nombre completo",
          minlength: "        El nombre del esrudiante debe ser de 17 dígitos"
        },
        email: {
          required: "        Por favor, ingrese el correo",
        },
      dir: {
          required: "Por favor, ingrese la dirección",
        },
      tel: {
          required: "Por favor, ingrese el telefono",
          minlength: "El telefono debe ser de 10 dígitos",
          maxlength: "El telefono debe ser de 10 dígitos",
      },
      gen: {
          required: "Por favor, ingrese el genero. Debe ser Mascilino o Femenino",
      },
       terms: {
        required: "Por favor, acepta nuestros términos"
      }
    },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });


  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  });



</script>

</body>
</html>
