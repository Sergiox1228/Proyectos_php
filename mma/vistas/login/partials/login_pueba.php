<?php


session_start();

		if ( isset($_POST["email"] ) && isset($_POST["clave"] ) ){

			include("../../common/conexion.php");

			$sql = "SELECT * FROM usuarios WHERE email = '" . $_POST["email"] . "' AND clave = '" . $_POST["clave"] . "'";

			$resultado = $datos_conexion->query($sql);

			$usuario = $resultado->fetch_assoc(); //leo y guardo en usuario

			if( $resultado->num_rows == 1 ){
				

			$id = $datos_conexion->query($sql);
			$resultado_id = $id->fetch_assoc(); 
            
	$_SESSION["id"] = $resultado_id["usuario_id"];
 $_SESSION["usuario"] = $resultado_id["nombre"];

$comparacion = "SELECT * FROM peleadores WHERE usuario_id = '" . $resultado_id["usuario_id"]  . "'";

$resultado_comparacion = $datos_conexion->query($comparacion);

			//$id_peleador = $resultado_comparacion->fetch_assoc(); //le


				if ($resultado_comparacion->num_rows == 1) {

$_SESSION["id_usado"] = $resultado_id["usuario_id"] ;


				}


				

	header("Location: ../../../index.php?m=index");
			

			




			
			}
			else {

$_SESSION["error"] = true;

header("Location: ../../../index.php?m=index");
			

				}

				}
				
				?>	