
<div class="col-12">
  
<form class="border border-light p-5" action="vistas/login/partials/login_pueba.php" method="POST">

    <p class="h4 mb-4 text-center">Ingresar</p>

    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <input type="password" id="defaultLoginFormPassword" name="clave"  class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-between">
        <div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <a href="">Forgot password?</a>
        </div>
    </div>

    <button class="btn btn-info btn-block my-4 mt-5" type="submit">Ingresar</button>

    <div class="text-center">
      

        <p> No esta registrado ?
            
        </p>
         </div>
<div class="row mt-5">

    


<?php
    if (isset($_SESSION['id']) // and isset($_SESSION['id_usado'])
  ) {  

?>
    <?php if (isset($_SESSION['id_usado'])) { 
       echo "entro";
      ?>
      
      <div class="col-4">
           <div align="center">
       <a class="btn btn-primary" href="index.php?m=logout" role="button">cerrar sesion</a></div>
      </div>


    <?php } else { ?>

      <div class="col-4">
           <div align="center">
       <a class="btn btn-primary" href="index.php?m=registro-peleadores" role="button">Registrase como peleador</a></div>
      </div>

      <div class="col-4">
           <div align="center">
       <a class="btn btn-primary" href="index.php?m=logout" role="button">cerrar sesion</a></div>
      </div>

       <?php echo $_SESSION['id'];  }
   } else {
      ?>
          <div class="col-4">

          <div align="center">
           <a class="btn btn-primary" href="index.php?m=registro-usuario" role="button">Registrase como usuario</a></div>
          </div>

<?php
}

?>







  

        



       
   </div>
</form>

</div>