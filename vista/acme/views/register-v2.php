<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Estudiante | Registra</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/acme/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vista/acme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/acme/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page"><br>
<div class="register-box">
  <div class="card card-outline card-purple">
    <div class="card-header text-center">
      <img class="logologin" src="vista/acme/dist/img/logo.png" alt="logo" width="100" height="100"><br>
      <a href="./" class="h1"><b>ACME</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><b>Registrase como nuevo miembro</b></p>

      <form method="POST" action="index.php?action=registrar">
        <h6 class="direct-chat-timestamp float-left">Nombre</h6>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nombre" placeholder="Pedro">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <h6 class="direct-chat-timestamp float-left"><br>Apellido</h6>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="apellido" placeholder="Bermudez">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">  
            <h6 class="direct-chat-timestamp float-left"><br>Edad</h6>
            <div class="input-group mb-1">
          <input type="number" class="form-control" name="edad" placeholder="11">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar-plus"></span>
            </div>
          </div>
            </div>
          </div>   
          <div class="col-7 "> 
            <h6 class="direct-chat-timestamp float-left"><br>Sexo</h6>
            <div class="input-group mb-3">
          <div class="input-group-append">
            <select name="sexo" required class="form-control">
              <option value="">Seleccione</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              </select>
            <div class="input-group-text">
              <span class="fas fa-venus-mars "></span>
            </div>
          </div>
            </div>
          </div>
        </div>   

        <h6 class="direct-chat-timestamp float-left"><br>Correo institucional</h6>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="correo" placeholder="example@acme.edu.co ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
    <!--
        <h6 class="direct-chat-timestamp float-left"><br>Curso</h6>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <select type="text" class="form-control"  name="correo" id="correo" placeholder=" Curso">
              <option value="0" selected="">Escoja</option>
              <?php 
              $rows = NULL;
                foreach ($curso as $rows) {
                  if($rows[1]==$curso[0]['nombreCurso']){
                    echo "<option value='".$rows[0]."' selected>".$rows[1]."</option>";
                  }else{
                    echo "<option value='".$rows[0]."'>".$rows[1]."</option>";
                  }
                }//fin for
              ?>
            </select>
          </div>
        </div> 
              -->
        <h6 class="direct-chat-timestamp float-left"><br>Contraseña</h6>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="passw" placeholder="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!--
        <h6 class="direct-chat-timestamp float-left"><br>Repita su contraseña</h6>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="passw" placeholder="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>-->

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Acepto <a href="#">términos y condiciones</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" >Crear</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="row">
        <div class="col-6">
          <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i>
              Facebook
            </a>
          </div>
        </div>  
        <div class="col-6">
          <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
              Google
            </a>
          </div>
        </div>
      </div>
      

      <a href="./" class="text-center">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
