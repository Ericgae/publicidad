<?php

include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM fisioterapeuta ";
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

<form class="form-group" method="post" action="../guardar/guardar_sesion.php">
<div class="modal fade" id="dataRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
          
   
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">diagnostico</label>
    <input type="text"  class="form-control" readonly id="diagnostico" name="diagnostico"  placeholder="">
    
  </div>
  </div>
   <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="text"  class="form-control" readonly id="ididentificacion" name="fkidentificacion"  placeholder="">
    
  </div>
  </div>

              <div class="form-group ">
               <div class="col-md-6">
                <label for="exampleInputEmail1">Fisioterapeuta:</label>
               
                <select id="fkfisioterapeuta" name="fkfisioterapeuta" class="form-control"> 
                <?php
                do { 
                    ?>
                    <option value="<?php echo $renglones_consulta1 ['idfisioterapeuta'];?>" > <?php echo $renglones_consulta1['nombref'];?> <?php echo $renglones_consulta1['apellidopf'];?> <?php echo $renglones_consulta1['apellidomf'];?> </option>
                
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select>
                                  
                      </div>
                      </div>
      <div class="form-group">
       <div class="col-md-6">
            <label for="exampleInputEmail1">Fecha:</label>
            <input type="date" class="form-control" id="fechab" name="fechab" value="<?php echo date("Y-m-d");?>" required > 
          </div>
          </div>
           <div class="form-group">
       
            <label for="exampleInputEmail1">Fase terapia:</label>
            <input type="text" class="form-control" id="faseterapia" name="faseterapia"  required > 
          
          </div>
          <div class="form-group">
            <label for="continente0" class="control-label">observaciones:</label>
           <textarea class="form-control" onKeyUp="this.value = this.value.toUpperCase();" name="observaciones" id="observaciones" rows="3"></textarea>
          </div>
      <div class="form-group">
            <label for="continente0" class="control-label">numero de sesion:</label>
            <input type="text" onKeyPress="return SoloNumeros(event);" class="form-control" id="nsesion" name="nsesion" required >
          </div>
          <div class="form-group">
            <label for="continente0" class="control-label">costo:</label>
            <input type="int" class="form-control" id="costo" name="costo" required >
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