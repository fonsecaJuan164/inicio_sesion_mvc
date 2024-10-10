<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACME | Log in Estudiante</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/acme/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vista/acme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/acme/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning card-ground">
    <div class="card-header text-center">
      <img class="logologin" src="vista/acme/dist/img/logo.png" alt="logo" width="100" height="100"><br>
      <a href="vista/acmefront/index.html" class="h1"><b>ACME</b></a>
    </div>
    <div class="card-body">

      <p class="login-box-msg"><strong>Inicie sesión para acceder a su cuenta</strong></p>

      <!-- Aquí se adapta el formulario para la estructura MVC -->
      <form action="index.php?action=iniciarSesion" method="POST" id="#quickForm">
        <h6 class="direct-chat-timestamp float-left">Correo</h6>
        <div class="input-group mb-3">
          <input type="email" name="correo" class="form-control" placeholder="example@acme.edu.co" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <h6 class="direct-chat-timestamp float-left">Contraseña</h6>
        <div class="input-group mb-3">
          <input type="password" name="passw" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="row">
        <div class="col-5">
          <div class="social-auth-links text-center">
            <a class="btn btn-block btn-info" href="?action=mostrarRegistro"> 
              <i class="fas fa-plus mr-2"></i>Registrarse
            </a>
          </div>
        </div>  
        <div class="col-7">
          <div class="social-auth-links text-center">
              <a class="btn btn-block btn-warning"href="?action=mostrarOlvidarContraseña">
                <i class="fas fa-unlock-alt"></i> Perdí contraseña
              </a>
            </a>
          </div>
        </div>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
     
      </p>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    
    $('#quickForm').validate({
      rules: {
        correo: {
          required: true,
          //codigo: true,
        },
        passw: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        correo: {
          required: "Por favor, ingrese su correo electrónico estudiantil",
          maxlength: "Por favor, ingrese un correo electrónico estudiantil valido",
          minlength: "El correo electrónico estudiantil es muy corto"
        },
        passw: {
          required: "Por favor, ingrese su contraseña",
          minlength: "Por favor, ingrese una contraseña valida"
      },
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

  $(document).ready(function(){
    $(".btnForgot").click(function(){
      window.location.href = "./views/forgot_password.html"; 
  
    });

     
});
</script>   
</body>
</html>
