<?php
session_start();
if (isset($_SESSION['usuario'])) {
  

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
  <?php 
    include "includes/navar.php";
  ?>  

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
    include "includes/menu.php";
  ?>
  <!-- /.Main Sidebar Container -->

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
              <li class="breadcrumb-item"><a href="change-password-v2.php">Cambiar contraseña</a></li>
              <li class="breadcrumb-item active">Perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!--
      <?php 
        //$objDB = new Consultas_Estudiante(); //Copia o instancia

        //$estudiante = array();
        //$estudiante = $objDB->EstudianteById(idEstudiante: $_GET['idEstudiante']);

      ?>-->
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

                <h3 class="profile-username text-center"><?php echo isset($_SESSION['usuario'][1]["nombre"]) ?> </h3>

                <p class="text-muted text-center"><?php //echo $estudiante [0]["nombre"]; ?> Estudiante</p>

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

  <!-- Footer -->
  <?php 
    include "includes/footer.php";
  ?>
  <!-- /.Footer -->
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

<?php
} else {
header('Location: ../index.php');
}
?>