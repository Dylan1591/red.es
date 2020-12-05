<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red.Es | Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">

        <link rel="icon" href="img/bg-img/Logo.ico">
</head>
<body>
<div class="form-body" class="container-fluid">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">


                     <h4 class="text-center" style="color: white">"Si supiera que el mundo se acaba mañana, yo, hoy todavía, plantaría un árbol"<h2 class="small" style="color: white">Martin Luther King</h2></h4>
                    </div>


            </div>
            <div class="form-holder">

                <div class="form-content">

                    <div class="form-items">

                        <a href="index.html mb-2">
                            <div class="logo">
                                <a href="index.html"><img class="rounded mx-auto d-block mb-5" src="img/login/Logo-completo.png" alt="" width="200"></a>
                            </div>
                        </a>

                        <h3>Inicio de sesión</h3>
                        <p>Entérate de lo que puedes lograr</p>
                        <div class="page-links">
                            <a href="login.html" class="active">Inicio</a><a href="register.html">Registro</a>
                        </div>
                        <form action="?controller=login&method=login" method="post">
                        <?php
                            if(isset($error['errorMessage'])) {
                        ?>
                                <div class="alert alert-danger alert-dismissable alert-width" role="alert">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <p class="text-dark"><?php echo $error['errorMessage'] ?></p>
                                </div>
                        <?php
                            }
                        ?>
                            <input class="form-control" type="email" name="usua_correo" placeholder="Correo electronico" required value="<?php echo isset($error['usua_correo']) ? $error['usua_correo'] : '' ?>">
                            <input class="form-control" type="password" name="usua_clave" placeholder="Contraseña" required>
                            <input type="checkbox" id="chk1"><label for="chk1">Recuérdame</label>
                                                    <div class="other-links">
                        <a href="sendemail/recuperarclave.php">¿Olvidaste tu contraseña?</a>
                        </div>
                            <div class="form-button">
                                <button class="ibtn">Ingresar</button>
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

