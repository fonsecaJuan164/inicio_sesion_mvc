<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACME| Log out</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card-ground">
    <div class="card-header text-center">
      <img class="logologin" src="../dist/img/logo.png" alt="logo" width="100" height="100"><br>
      <a href="../acmefront/index.html" class="h1"><b>ACME</b></a>
    </div>
    <div class="card-body" style="text-align: center;">
      <p class="login-box-msg">
        <h2 class="direct-chat-timestamp"><strong>Su sesión ha finalizado con exito</strong></h2></p>
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
<?php if (isset($_SESSION['usuario'])): ?>
    <p>Bienvenido, <?= $_SESSION['usuario']['nombre'] ?> | <a href="index.php?action=logout">Cerrar Sesión</a></p>
<?php endif; ?>