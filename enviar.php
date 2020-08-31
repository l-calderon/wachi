<?php


require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["phone"])) {
    die ("Es necesario completar todos los datos del formulario");
}





$nombre = $_POST["name"];

$email = $_POST["email"];

$telefono = $_POST["phone"];


$destinatario = "leancabita@gmail.com";


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "mail.wachiperu.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "gerenciadeoperaciones@wachiperu.com";  // Mi cuenta de correo
$smtpClave = "";  // Mi contraseña




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>telefono: {$telefono}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header("Location: http://www.wachiperu.com/");
} else {
    echo "Ocurrió un error inesperado.";
}


?>