 <?php include ("vistas/common/slider.php") ?>
 
  

  <div class="container-fluid">
  <div class="row mt-4 mb-4">
    <div class="col-md-12">
      <h1 class="text-center">
      Peleadores
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row mt-4 mb-4">
        <div class="col-md-4">

<div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php?m=index">Todas</a>
 <?php
if ( isset(  $_SESSION["mensaje"]) ) {
?> <script type="text/javascript">
  
alert("registro correcto!");

</script>

<?php 
 } 
 if ( isset(  $_SESSION["error"]) ) {
?> <script type="text/javascript">
  
alert("Usuario no registrado!");

</script>

<?php 
 } 
 








                  $datos_conexion=mysqli_connect("localhost", "root", "", "mma") 
or die ("No se pudo conectar"); 


                    $sql = "SELECT * FROM categorias_peleadores";

                    $categorias = $datos_conexion->query($sql);

                    foreach ($categorias as $categoria) {
                  ?>
                    <a class="dropdown-item" href="index.php?id_cat=<?=$categoria['cat_peleadores_id']?>"><?=$categoria["cat_peleadores_nombre"]?> </a>
                  <?php
                    }
                  ?>



   
  </div>
</div>


        </div>
        <div class="col-md-4">

 <form class="form-inline my-2 my-lg-0">
                  <input name="busqueda" class="form-control mr-sm-2" type="search" aria-label="Search">
                  
                  <button class="btn btn-outline-dark mx-3 my-2 my-sm-0" type="submit">Buscar
                  </button>
            </form>


        </div>
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row mt-4 mb-4">
        




 
   <?php

              $datos_conexion=mysqli_connect("localhost", "root", "", "mma") 
or die ("No se pudo conectar"); 

            $sql = "SELECT * FROM peleadores";


            if ( isset( $_GET["id_cat"]) ){
              $sql .= " WHERE   cat_peleador_id = " . $_GET["id_cat"];
            }
            else{
               if ( isset( $_GET["busqueda"]) ){
                  $sql .= " WHERE   peleadores_nombre LIKE '%" . $_GET["busqueda"] . "%'";
               }

            }

           


            $sql .= " ORDER BY peleadores_nombre";

            $peleadores = $datos_conexion->query($sql);

       







           foreach ($peleadores as $peleador) {
          ?>

          <div class="card m-4" style="width: 18rem;">
  <img src="archivos/<?= $peleador["peleadores_imagen"]?>" class="card-img-top mx-auto" height="300" width="260" alt="...">
  <div class="card-body">
    <h5 class="card-title">

<?php echo $peleador["peleadores_nombre"] ?>

  </h5>

    <p class="card-text">
      
<p> Edad del peleador: <?php echo $peleador["peleadores_edad"] ?>

<?php   $sql = "SELECT * FROM categorias_peleadores where cat_peleadores_id =".$peleador["cat_peleador_id"]." ORDER BY    cat_peleadores_nombre";

                    $categorias = $datos_conexion->query($sql);
                  

                    foreach ($categorias  as $categoria ) {
                  ?>
<p>categoria del peleador: <?php echo $categoria["cat_peleadores_nombre"] ?></p>


<?php } 
  ?> 


<?php   $sql = "SELECT * FROM nacionalidades where nac_id =".$peleador["nac_id"]." ORDER BY   nac_nombre";

                    $nacionalidades = $datos_conexion->query($sql);

                    foreach ($nacionalidades as $nacionalidad) {
                  ?>
<p>nacionalidad del peleador: <?php echo $nacionalidad["nac_nombre"] ?></p>

<?php } 
  ?> 



 </p>


    </p>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a> \-->
  </div>
</div>

          <?php
            }
          ?>
    </div>
  </div>
</div>
