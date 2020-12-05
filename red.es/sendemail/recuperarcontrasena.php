<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(true);

		if (isset($_POST['correo'])){

				$server = "localhost";
				$user = "root";
				$clave = "";
				$db = "redes";
				$conexion = mysqli_connect($server, $user, $clave, $db) or die ("Error al conectar al servidor.");

				$correo = $_POST['correo'];
				$usuario = "SELECT usua_clave FROM usuario WHERE usua_correo ='{$correo}'";
				$resultado = mysqli_query($conexion, $usuario);
				$columna = mysqli_fetch_assoc($resultado);

			if ($columna) {

				try {
    //Server settings
					$mail->SMTPDebug =  0;                    
					$mail->isSMTP();                                            
					$mail->Host       = 'smtp.gmail.com';                    
					$mail->SMTPAuth   = true;                                   
					$mail->Username   = 'fundared.escolar@gmail.com';                     
					$mail->Password   = 'BrSh379@';                               
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
					$mail->Port       = 587;                                     

    //Recipients
					$mail->setFrom('fundared.escolar@gmail.com', 'Fundación RED.ES');
					$mail->addAddress($_POST['correo']);    

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    // Content
					$mail->isHTML(true);   
					$mail->CharSet = 'UTF-8';                              
					$mail->Subject = 'Recuperación de contraseña | RED.ES.';
					$mail->Body = '<html>
					<body style="background-color:#FFFFFF;">
					<header style="background-color:#23394A; width:960px; margin:auto; margin-top:45px; margin-bottom:45px;">			
					<center><img src="https://i.ibb.co/C1znVsx/Logo-completo.png" width="20%" style="margin:auto; margin-bottom: 15px; margin-top: 15px;"></center>
					</header>
					<article style="background-color:#FFFFFF; width:960px; margin:auto; height:250px; margin-top:10px;">
					<nav style="background-color:#FFFFFF; width:960px; height:250px; float:left; margin-bottom:45px; margin-top:10px;">
					<font face="verdana" color="#000000" align="center">
					<h2 style="margin-left:30px; margin-right:30px; margin-top:50px;" align="center">
					Recuperación de contraseña
					</h2>
					<p style="margin-left:30px; margin-right:30px;" size="30px">
					Usted ha solicitado la recuperación de su contraseña. A continuación encontrará la información para poder ingresar nuevamente al sistema. Le recomendamos cambiar su contraseña luego de ingresar al sistema.<br><br>
					</p>
					<h4 align="center"> Usuario: '.$_POST['correo'].'<br>Contraseña: '.$columna['usua_clave'].'<br><br>
					</h4>
					</font>
					</nav>
					</article>
					</body>
					</html>';

					$mail->send();
					echo '<script>
					alert("El correo se ha enviado correctamente.");
					window.history.go(-1);
					</script>';

				} catch (Exception $e) {
					echo '<script>
					alert("Error al enviar: {$mail->ErrorInfo}");
					window.history.go(-1);
					</script>';
				}

			}else{

				echo '<script>
				alert("No existe el usuario");
				window.history.go(-1);
				</script>';
			}

		}