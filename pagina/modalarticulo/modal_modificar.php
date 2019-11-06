  <?php


 include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM almacen ";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);

$consulta_paciente="SELECT * FROM tipo ";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);

$idarticulo=intval($_POST['idarticulo']);

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
        <h4 class="modal-title" id="exampleModalLabel">Modificar Articulos:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
     <div class="input-group">
        <span class="input-group-addon"> Nombre(s) Articulo:</span>
        <input type="text" maxlength="20" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="nombre" name="nombre" required>
        <input type="hidden" class="form-control"  id="idarticulo" name="idarticulo">
      
        </div>

        <br>
        <div class="input-group">
        <span class="input-group-addon"> codigo:</span>
        <input type="text" class="form-control" maxlength="20"    onKeyUp="this.value = this.value.toUpperCase();" id="codigo" name="codigo" >
      
        </div>
 

        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Marca:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="marca" name="marca" required>
        </div>
       <br>
         
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Precio Unitario:</span>
        <input type="text"  class="form-control" onkeypress="return soloNumeros(event);"  id="punitario" name="punitario" required>
        </div>
<br>
        <div class="input-group ">
        <span class="input-group-addon"> Precio Unitario 2:</span>
        <input type="text"  class="form-control" onkeypress="return soloNumeros(event);"  id="punitariod" name="punitariod" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Precio Unitario 3:</span>
        <input type="text"  class="form-control" onkeypress="return soloNumeros(event);"  id="punitariot" name="punitariot" required>
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon"> Cantidad:</span>
        <input type="text"  class="form-control" onkeypress="return soloNumeros(event);" id="cantidad" name="cantidad" required>
         </div>
       <div class="input-group">
        <label class="col-sm-2 control-label">tipo</label>
        
        <div >

        <select id="fkTipo" name="fkTipo" class="form-control"> 

        <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta ['idtipo'];?>" > <?php echo $renglones_consulta['tipo'];?> </option>
        
                      <?php
                      } while ($renglones_consulta = mysqli_fetch_array($resultado_consulta));
                        ?>
                      </select>
                      </div>      
                      </div>
       
         <br>
       <div class="input-group">
    <label for="exampleInputEmail1">almacen</label>
    
        <select name="fkAlmacen" id="fkAlmacen"  class="form-control"> 
        <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['idalmacen'];?>" > <?php echo $renglones_consulta1['nombrea'];?></option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select>
                      </div> 
        <br>
       
        
         <br>
      <div class="input-group ">
        <span class="input-group-addon"> Estatus de Promocion:</span>
        <select id="estatus" name="estatus" class="form-control" >
          <option>Activo</option>
            <option>Inactivo</option>
        </select>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> descripcion:</span>
        <input type="text"  class="form-control" onkeypress="return soloNumeros(event);"  id="descripcion" name="descripcion" required>
        </div>
         
         <br>
        <div class="input-group ">
        <span class="input-group-addon"> fecha Inicio:</span>
        <input type="date"  class="form-control"   id="fechaInicio" name="fechaInicio" >
         </div>
     <br>
        <div class="input-group ">
        <span class="input-group-addon"> fecha limite:</span>
        <input type="date"  class="form-control"   id="fechaFin" name="fechaFin">
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

