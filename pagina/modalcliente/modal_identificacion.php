<?php


 include ('../../connect_db.php');


$consulta_paciente="SELECT * FROM tipo ";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);


?>

<form class="form-group" method="post" action="../guardar/guardar_identificacion.php">
<div class="modal fade" id="dataRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="exampleModalLabel">REGISTRO DE AUTOMOVIL:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
   
    <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">MARCA</label>
    <input type="text"  class="form-control"  id="marca" name="marca"  placeholder="">
    
  </div>
  </div>
   <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">MODELO</label>
    <input type="text"  class="form-control"  id="modelo" name="modelo"  placeholder="">
    
  </div>
  </div>
   <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">ID CLIENTE</label>
    <input type="text" readonly class="form-control" name="fkpersona" id="idcliente"  placeholder="">
    
  </div>
  </div>
			<div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">COLOR</label>
    <input type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" name="color" id="color"  placeholder="">
    
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputPassword1">PLACAS</label>
    <input type="text" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" name="placas" id="placas" placeholder="">
  </div>
  </div>
   <div class="col-md-4">
  <div class="form-group">
  <label for="exampleInputPassword1">RODADO</label>
    <input type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" name="rodado" id="rodado" placeholder="">
</div>
</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class='glyphicon glyphicon-floppy-remove'></i></button>
        <button type="submit" class="btn btn-primary"><i class='glyphicon glyphicon-floppy-disk'></i></button>
      </div>
    </div>
  </div>
</div>
</form>