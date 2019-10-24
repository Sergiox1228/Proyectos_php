<?php
session_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];


$contenido_mail="Nombre: ".$nombre."\r\n"."Apellido: ".$apellido."\r\n"."Mensaje: ".$mensaje."\r\n"."Correo: ".$correo;


mail("sergiox1228@gmail.com", "Consulta de Usuario",$contenido_mail);


 $_SESSION["correo_enviado"] = true;

header("Location: ../../../index.php?m=index");

?>