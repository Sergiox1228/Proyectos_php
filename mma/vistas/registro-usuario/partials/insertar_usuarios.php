<?php
session_start();
$email=$_POST['email'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];


$contenido_mail="Usuario: ".$email."\r\n"."Clave: ".$clave;


mail($email, "Registro de usuario",$contenido_mail);



include ("../../common/conexion.php");


$sql = "INSERT INTO usuarios(usuario_id, email, clave, nombre) VALUES ";


$sql .= " ( DEFAULT, '";
$sql .= $email . "',";

$sql .= $clave . ",'";
$sql .= $nombre."');";




mysqli_query($datos_conexion, $sql);

 $_SESSION["mensaje"] = true;

header("Location: ../../../index.php?m=index");

?>