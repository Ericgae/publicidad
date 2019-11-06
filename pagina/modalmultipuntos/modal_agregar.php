<?php


 include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM cotizaciones_demo2 ";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);




?>

<form class="form-group" method="post" id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar multipuntos</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

  <!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    
        <div class="input-group">

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

 <script src="js/app.js"></script>

        </div>

            <br>
             <div class="col-md-6">
  
<div class="input-group ">

  <span class="input-group-addon"> numero cotizacion:</span>
    
        <select name="fkVenta" id="fkVenta"  class="selectpicker" data-show-subtext="true" data-live-search="true" > 
        <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['id_cotizacion'];?>" > <?php echo $renglones_consulta1['numero_cotizacion'];?></option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select>
                  
     </div>
 
  </div>
  <br>
  <br>
  <br>
          <div class="input-group ">
        <span class="input-group-addon"> como supo de nostros:</span>
        <select id="nitrogeno" name="nitrogeno" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>

        <br>
         <div class="input-group ">
        <span class="input-group-addon"> Poliza:</span>
        <select id="tipo_poliza" name="tipo_poliza" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
            <div class="input-group ">
        <span class="input-group-addon">Alineacio:</span>
        <select id="alineacion" name="alineacion" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
   <div class="input-group ">
        <span class="input-group-addon">Balatas:</span>
        <select id="balatas" name="balatas" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
   
     
           <br>
     <div class="input-group ">
        <span class="input-group-addon"> suspencion:</span>
        <select id="suspencion" name="suspencion" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
               
     <div class="input-group ">
        <span class="input-group-addon">Llantas:</span>
        <select id="llantas" name="llantas" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
       <div class="input-group ">
        <span class="input-group-addon">Baterias:</span>
        <select id="baterias" name="baterias" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
       <div class="input-group ">
        <span class="input-group-addon">Pulido de faros:</span>
        <select id="pulido_faro" name="pulido_faro" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>

               
       <div class="input-group ">
        <span class="input-group-addon"> Rotacion:</span>
        <select id="rotacion" name="rotacion" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
      <div class="input-group ">
        <span class="input-group-addon"> llantas desechas:</span>
        <select id="llanta_desecha" name="llanta_desecha" required class="form-control" required>
          <option>Si</option>
            <option>No</option>
        </select>
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon"> especificaciones:</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="especificacion" name="especificacion" required>
        </div>
        <br>

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