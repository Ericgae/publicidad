<?php


 include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM problema ";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);


?>
<form class="form-group" method="post" action="guardar/guardar_tipo.php">
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
            <label for="nombre0" class="control-label">tipo:</label>
            <input type="text" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" id="tipo" name="tipo" required maxlength="60">
          </div>
    
           <div class="form-group ">
        <label class="col-sm-2 control-label">problema</label>
        <div >
        <select id="fkproblema" name="fkproblema" class="form-control"> 
        <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['idproblema'];?>" > <?php echo $renglones_consulta1['problema'];?> </option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select>
                      </div>      
                      </div>
                      <br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>