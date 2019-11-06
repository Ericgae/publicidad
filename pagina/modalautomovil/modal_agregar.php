<form class="form-group" method="post" action="insertar_direccion2.php">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
          
      <div class="form-group">
            <label for="nombre0" class="control-label">calle:</label>
            <input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="45">
          </div>
      <div class="form-group">
            <label for="moneda0" class="control-label">numero:</label>
            <input type="text" class="form-control" id="moneda0" name="moneda" required maxlength="34">
          </div>
      <div class="form-group">
            <label for="capital0" class="control-label">colonia:</label>
            <input type="text" class="form-control" id="capital0" name="capital" required maxlength="30"> 
          </div>
      <div class="form-group">
            <label for="continente0" class="control-label">municipio:</label>
            <input type="text" class="form-control" id="continente0" name="continente" required maxlength="57">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>