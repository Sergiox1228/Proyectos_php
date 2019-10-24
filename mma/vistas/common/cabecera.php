<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MMA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="index.php?m=eventos">eventos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?m=noticias">Noticias</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?m=rankings">Rankings</a>
      </li>
      
      <li class="nav-item">  
        <a class="nav-link" href="index.php?m=contactos">Contactos</a>
      </li>
   
     
    </ul>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="navbar-nav ml-md-auto">
                
                 <?php
    if (isset($_SESSION['id']) // and isset($_SESSION['id_usado'])
  ) {  

?>
    <?php if (isset($_SESSION['id_usado'])) { 
      
      ?>
      
     <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="#">Cuenta</a>
                       
                       <a class="dropdown-item" href="index.php?m=logout">Salir</a>
                    </div>
                  </li>


    <?php } else { ?>

     <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="#">Cuenta</a>
                        <a class="dropdown-item" href="index.php?m=registro-peleadores">Crear cuenta como peleador</a>
                       <a class="dropdown-item" href="index.php?m=logout">Salir</a>
                    </div>
                  </li>

       <?php }
   } else {
      ?>
         <li class="nav-item">
                     <a class="nav-link" href="index.php?m=registro-usuario">Creá tu cuenta</a>
                  </li>

                   <li class="nav-item">
                     <a class="nav-link" href="index.php?m=login">Ingresa</a>
                  </li>


<?php
}

?>
              </ul>

            </div>

</nav>