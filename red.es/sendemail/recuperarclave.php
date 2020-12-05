<?php
  require '../providers/Database.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Recuperar contraseña</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="icon" href="../img/bg-img/Logo.ico">
</head>
<body background="img/panoramica3.jpg"; background-repeat:no-repeat; bgproperties="fixed">

  <div style="padding-top: 70px;"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="background-color:#23394A">
          <div class="panel-body">
            <div class="text-center" style="color:#FFFFFF  ">
              <h3><img src="../img/login/Logo-completo.png" width="80%"></h3>
              <h2 class="text-center">¿Olvidó la contraseña?</h2>
              <p>Escriba el correo electrónico que tiene registrado en el sistema para recuperar la contraseña.</p>
              <div class="panel-body">

                <form action="recuperarcontrasena.php" method="POST" id="register-form" role="form" autocomplete="off" class="form">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <input id="correo" name="correo" placeholder="Correo electrónico" class="form-control"  type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="recover-submit" class="btn btn-lg btn-info btn-block" value="Enviar correo" type="submit">
                  </div>

                  <input type="hidden" class="hide" name="token" id="token" value=""> 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>