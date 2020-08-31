<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "leancabita@gmail.com";
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $numero = $_POST["phone"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nNúmero: " . $numero;
    mail($destino, "Contacto", $contenido);
    if ($mail) {
    	echo "<h4>Formulario enviado exitosamente!</h4>";
    }
    header("Location: www.wachiperu.com");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>