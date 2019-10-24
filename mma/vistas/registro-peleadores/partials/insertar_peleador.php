<?php
session_start();

$nombre=$_POST['peleadores_nombre'];
$apellido=$_POST['peleadores_apellido'];
$edad=$_POST['peleadores_edad'];
$categoria=$_POST['cat_peleador_id'];
$nacionalidad=$_POST['nac_id'];
$imagen=$_POST['peleadores_imagen'];
$id = $_SESSION["id"];








include ("../../common/conexion.php");

$sql = "INSERT INTO peleadores(usuario_id, peleadores_nombre, peleadores_apellido, peleadores_edad, cat_peleador_id, nac_id, peleadores_imagen  ) VALUES ";

$sql .= " (" . $id . ", '";
$sql .= $nombre . "','";
$sql .= $apellido ."', ";
$sql .= $edad . ",";
$sql .= $categoria . ",";
$sql .= $nacionalidad . ",'";
$sql .= $imagen."');";



mysqli_query($datos_conexion, $sql);

 $_SESSION["mensaje"] = true;
header("Location: ../../../index.php?m=index");







?>