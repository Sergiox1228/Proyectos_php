<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MMA</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/estilos.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    

<div class="container-fluid">

<?php 

    include "cabecera.php";
    
    include $contenido; 

?>

 <?php include "pie.php"   ?>
</div>


<script src="vendor/jquery/jquery-3.4.1.min.js"></script>

<script src="vendor/popper/popper.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>