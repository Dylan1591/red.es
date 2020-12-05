<?php
	
	$nombrecolegio = $_POST["nombrecolegio"];
	$email = $_POST["email"];
	$nombre = $_POST["nombre"];
	$cargo = $_POST["cargo"];
	$mensaje = $_POST["mensaje"];

	$body = "Nombre Colegio: ".$nombrecolegio."<br>Correo de contacto: ".$email."<br>Nombre del encargado: ".$nombre."<br>Cargo: ".$cargo."<br>Mensaje: ".$mensaje;

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(true);

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
		$mail->setFrom('fundared.escolar@gmail.com', $nombre);
		$mail->addAddress('fundared.escolar@gmail.com', $nombre);    

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    // Content
		$mail->isHTML(true);   
		$mail->CharSet = 'UTF-8';                              
		$mail->Subject = 'CORREO PARA CONTACTAR: PETICIÓN DE SERVICIOS.';
		$mail->Body = $body;

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
 //SMTP::DEBUG_SERVER; 
?>
