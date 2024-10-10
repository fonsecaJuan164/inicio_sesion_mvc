<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acme | Cambiar Contraseña</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-info">
    <div class="card-header text-center">
      <img class="logologin" src="../dist/img/logo.png" alt="logo" width="100" height="100"><br>
      <a href="../acmefront/index.html" class="h1"><b>ACME</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Para cambiar sucontraseña<br>Ingresa a continuación tu contraseña actual y dos veces la nueva.</p>
      <form id="changePass">
      <h6 class="direct-chat-timestamp float-left">Ingrese su contraseña actual</h6>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="Oldpass" class="form-control" id="Oldpass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <h6 class="direct-chat-timestamp float-left">Ingrese su nueva contraseña</h6>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="newPass" class="form-control" id="newPass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div> 
        <h6 class="direct-chat-timestamp float-left">Ingrese su contraseña nuevamente</h6>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="newPass2" class="form-control" id="newPass2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-unlock-alt"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block" id="changePass">Cambiar contraseña</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="forgot_password.php">Olvidé mi contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Su contraseña se ha cambiado exitosamente" );
        window.location.href = "estudiante_perfil.php"; 
      }
    });
    $('#changePass').validate({
      rules: {
        Oldpass: {
          required: true,
         // codigo: true,
        },
        newPass: {
          required: true,
          minlength: 5
        },
        newPass2: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        Oldpass: {
          required: "Por favor, ingrese su contraseña",
          minlength: "Por favor, ingrese una contraseña valida"
      },
        newPass2: {
          required: "Por favor, ingrese la actual contraseña nuevamente",
          maxlength: "Por favor, ingrese su nueva contraseña nuevamente",
          minlength: "El código estudiantil debe ser de 5 dígitos"
        },
        newPass: {
          required: "Por favor, ingrese la nueva contraseña",
          maxlength: "Por favor, ingrese su nueva contraseña",
          minlength: "El código estudiantil debe ser de 5 dígitos"
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
  /*setTimeout(function(){ 
  $("#cancelar").click();
  window.location.href = "../views/se_perfil.html"; 
  }, 1 * 1000);*/
  </script> 
</body>
</html>
