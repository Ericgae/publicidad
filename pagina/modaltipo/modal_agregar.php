<form class="form-group" method="post" action="../guardar/guardar_tipo.php">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar tipo producto</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
          
      <div class="form-group">
            <label for="nombre0" class="control-label">tipo articulo:</label>
            <input type="text" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" id="tipo" name="tipo" required maxlength="60">
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