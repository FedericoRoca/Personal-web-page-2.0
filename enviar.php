<?php
$destino= "roca.fedee@gmail.com";
$nombre = $_POST["user"];
$correo= $_POST["email"];
$mensaje=$_POST["mensaje"];

$contenido= "Nombre: ".$nombre . "\nCorreo: " .$correo ."\nMensaje: " .$mensaje;

mail($destino,"Mensaje Pagina Web",$contenido);

header("Location:gracias.html");
?>