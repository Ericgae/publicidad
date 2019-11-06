  <?php 
include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM Provedor";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);
?>



   <script >
        //Se utiliza para que el campo de texto solo acepte letras
        function soloLetras(e) {
           key = e.keyCode || e.which;
          tecla = String.fromCharCode(key).toString();
          letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
          especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

          tecla_especial = false
          for(var i in especiales) {
             if(key == especiales[i]) {
              tecla_especial = true;
              break;
            }
          }

          if(letras.indexOf(tecla) == -1 && !tecla_especial)
             return false;
          }
        </script>

        <script>
          //Se utiliza para que el campo de texto solo acepte numeros
          //min="10" max="20"
        function SoloNumeros(evt){
        if(window.event){//asignamos el valor de la tecla a keynum
         keynum = evt.keyCode; //IE
        }
        else{
        keynum = evt.which; //FF
        } 
        //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
        if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
         return true;
        }
        else{
         return false;
          }
          }
        </script>

<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Pedido:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
     <div class="input-group">
        <span class="input-group-addon"> Nombre(s):</span>
        <input type="text" maxlength="50" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="nombre" name="nombre" required>
        <input type="hidden" class="form-control" id="idpedido" name="idpedido">
        </div>
        <br>
         <div class="form-group row">
      
          <label for="tel1" class="col-md-1 control-label">Proveedor:</label>
          <br>  
              <div class="col-md-4">
                        <select name="fkProvedor" id="fkProvedor" class="selectpicker" data-show-subtext="true" data-live-search="true">
          
       <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['idprovedor'];?>" > <?php echo $renglones_consulta1['nombreP'];?>  </option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select> 
                  </div>
        </div>
      
        <br>
         <div class="input-group">
        <span class="input-group-addon"> fecha:</span>
        <input type="date" maxlength="50" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="fecha" name="fecha" required>
       </div>

       <br>
       
         <div class="input-group">
        <span class="input-group-addon"> Producto:</span>
        <input type="text" maxlength="50" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="producto" name="producto" required>
       </div>
<br>

         <div class="input-group">
        <span class="input-group-addon"> Precio:</span>
        <input type="text" maxlength="50" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="precio" name="precio" required>
       </div>
       <br>
         <div class="input-group">
        <span class="input-group-addon"> Cantidad:</span>
        <input type="text" maxlength="50" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="cantidad" name="cantidad" required>
       </div>
       <br>
         <div class="input-group">
        <span class="input-group-addon"> Anticipo:</span>
        <input type="text" maxlength="50" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="anticipo" name="anticipo" required>
       </div>
       <br>
         <div class="input-group">
        <span class="input-group-addon"> Resto a Pagar:</span>
        <input type="text" maxlength="50" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  requeride id="total" name="total" required>
       </div>
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
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>