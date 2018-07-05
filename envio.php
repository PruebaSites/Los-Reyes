<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$asunto ="Contacto desde la web";
$destino = "ventas01@impresionlosreyes.com";


$carta =  "De: $nombre \n";
$carta .= "Correo: $email\n";
$carta .= "Telefono: $telefono\n";
$carta .= "Mensaje: $mensaje";


$correo = mail($destino,$asunto,$carta);
/*header("Location:index.php");*/

if ($correo) {
	header("Location:index.php");
}else{
	echo "Error";
}



?>