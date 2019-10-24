<div class="col-12">
  
<form class="border border-light p-5" action="vistas/registro-peleadores/partials/insertar_peleador.php" method="POST">

    <p class="h4 mb-4 text-center">Registro de Peleadores</p>

    
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Nombre" name="peleadores_nombre">

  
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Apellido" name="peleadores_apellido">

   
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Edad" name="peleadores_edad">

   
    <select class="browser-default custom-select mb-4" id="select" name="cat_peleador_id">
        <option value="" disabled="" selected="">Seleccione su categoria</option>
        <option value="1">Peso pesado</option>
        <option value="2">Peso semi pesado</option>
        <option value="3">Peso mediano</option>
        <option value="4">Peso welter</option>
        <option value="5">Peso ligero</option>
        <option value="6">Peso pluma</option>
        <option value="7">Peso mosca</option>

    </select>

 
      <select class="browser-default custom-select mb-4" id="select" name="nac_id">
        <option value="" disabled="" selected="">Seleccione su nacionalidad</option>
        <option value="1">Venezuela</option>
        <option value="2">Argentina</option>
        <option value="3">Chile</option>
        

    </select>

    <label for="exampleFormControlFile1">Suba una foto de perfil</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="peleadores_imagen">

    <button class="btn btn-info btn-block my-4" type="submit">Registrase</button>


  
</form>

</div>

</div>