<?php 
include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM cliente, persona where persona.idpersona=cliente.fkPersona";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);

$consulta_paciente2="SELECT * FROM provedor, direccion where direccion.iddireccion=provedor.fkdomicilio";
$resultado_consulta2=mysqli_query($con,$consulta_paciente2);
$renglones_consulta2=mysqli_fetch_assoc($resultado_consulta2);
$num_renglones2=mysqli_num_rows($resultado_consulta2);
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- Latest compiled and minified JavaScript -->

<form id="guardaPedido">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
          
     <div class="form-group row">
      
          <label for="tel1" class="col-md-1 control-label">cliente:</label>
          <br>  
              <div class="col-md-4">
                        <select name="fkCliente" id="fkCliente" class="selectpicker" data-show-subtext="true" data-live-search="true">
          
       <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['idcliente'];?>" > <?php echo $renglones_consulta1['nombre'];?>  </option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select> 
                  </div>
        </div>
        <br>
          <div class="form-group row">
      
          <label for="tel1" class="col-md-1 control-label"> provedor: </label>
          <br>
              <div class="col-md-4">
                        <select name="fkProvedor" id="fkProvedor" class="selectpicker" data-show-subtext="true" data-live-search="true">
          
       <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta2 ['idprovedor'];?>" > <?php echo $renglones_consulta2['nombreP'];?>  </option>
        
                      <?php
                      } while ($renglones_consulta2 = mysqli_fetch_array($resultado_consulta2));
                        ?>
                      </select> 
                  </div>
        </div>
        <br>
        <?php
$fecha=time() - (8 * 60 * 60);
$fechaRestada=date(' Y-m-d H:i:s  ',$fecha);
$date=date("Y-m-d H:i:s");
?>
 

        <?php $date=date("Y-m-d H:i:s");?>
        <div class="input-group">
        <span class="input-group-addon">Fecha:</span>
        <input type="text" value="<?php echo $fechaRestada; ?>" class="form-control" maxlength="10"   id="fecha" name="fecha" required>
              
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">producto:</span>
        <input type="text" class="form-control" maxlength="10"   id="producto" name="producto" required>
              
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">precio:</span>
        <input type="text" class="form-control" maxlength="10"   id="precio" name="precio" required>
          
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">cantidad:</span>
        <input type="text" class="form-control" maxlength="10" value="" onblur="multiplica(this.form)"  id="cantidad" name="cantidad" required>
           
      </div>
<br>
      <div class="input-group">
        <span class="input-group-addon">subtotal:</span>
        <input type="text" class="form-control" maxlength="10"  readonly id="subtotal" name="subtotal" required>
          
      </div>
      <br>
      <br>
      

      <div class="input-group">
        <span class="input-group-addon">Anticipo:</span>
        <input type="text" class="form-control" maxlength="10"   id="anticipo" name="anticipo" value="" onblur="resta(this.form)" required>
          
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">tootal:</span>
        <input type="text" class="form-control" maxlength="10"   id="total" name="total" readonly required>
          
      </div>
      <br>
 <br>
     
      <div class="input-group">
        <span class="input-group-addon">status:</span>
        <select id="status" name="status" class="form-control"> 

<option>En proceso</option>
<option>producto en tienda</option>
<option>cancelar</option>
        </select> 
              
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
 </div> 
 <script language="javascript">

function multiplica(form){
var resultado;
var x=0;
var y=0;
x = parseInt (form.precio.value);
y = parseInt (form.cantidad.value);

resultado = x * y;

form.subtotal.value=resultado;
}

function resta(form){
var resultado;
var x=0;
var y=0;
x = parseInt (form.subtotal.value);
y = parseInt (form.anticipo.value);

resultado = x - y;

form.total.value=resultado;
}
</script>