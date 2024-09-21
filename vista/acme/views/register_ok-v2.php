<?php 
  session_start();  
 // Ajusta la ruta según sea necesario
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACME | Log in Estudiante</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning card-ground">
    <div class="card-header text-center">
    <img class="logologin" src="../dist/img/logo.png" alt="logo" width="100" height="100"><br>
    <a href="/vista/acmefront/index.html" class="h1"><b>ACME</b></a>
    </div>
    <div class="card-body">

      <h4 class="login-box-msg"><strong>Hola, <?php echo $_SESSION['usuario']; ?> </strong></h4>

      <!-- Aquí se adapta el formulario para la estructura MVC -->
      <form action="index.php?action=iniciarSesion" method="POST">
        <h6 style="text-align: center;" class="direct-chat-timestamp float-center">Usted se ha registrado con exito. <br> Espere a ser redirijido al login para iniciar sesión.</h6>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>

  setTimeout(function(){ 
  window.location.href = "/inicio_sesion_mvc"; 
  }, 2 * 1000);
  
  </script>
</body>
</html>
