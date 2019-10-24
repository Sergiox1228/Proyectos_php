<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
			Peleadores
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php?m=peleadores">Todas</a>
 <?php

                  $datos_conexion=mysqli_connect("localhost", "root", "", "mma") 
or die ("No se pudo conectar"); 


                    $sql = "SELECT * FROM categorias_peleadores ORDER BY cat_peleadores_nombre";

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
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


				</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
  <?php

         
                  $datos_conexion=mysqli_connect("localhost", "root", "", "mma") 
or die ("No se pudo conectar"); 


            $sql = "SELECT * FROM productos";


            if ( isset( $_GET["id_marca"]) ){
              $sql .= " WHERE marca_id = " . $_GET["id_marca"];
            }
            else{
               if ( isset( $_GET["busqueda"]) ){
                  $sql .= " WHERE producto_nombre LIKE '%" . $_GET["busqueda"] . "%'";
               }

            }

           


            $sql .= " ORDER BY producto_nombre";

            $productos = $conexion->query($sql);

            foreach ($productos as $producto) {
          ?>
		</div>
	</div>
</div>