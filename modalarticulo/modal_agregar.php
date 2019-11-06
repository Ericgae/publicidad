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


?>
<link href="../../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

<script src="../../js/fileinput.min.js" type="text/javascript"></script>

<form class="form-group" method="post" enctype="multipart/form-data" action="../guardar/guardaarticulo.php">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
      <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">
            Registro De Almacen
          </h3>
        </div>
        <br>
      <div class="input-group">
        <span class="input-group-addon"> Nombre(s):</span>
        <input type="text" maxlength="40" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="nombre" name="nombre" required>
        
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Marca:</span>
        <input type="text" class="form-control" maxlength="20"  placeholder="lopez" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" id="marca" name="marca" required>
                </div>
 <br>
  <div class="input-group">
        <span class="input-group-addon"> Codigo:</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="codigo" name="codigo" required>
        </div>
        <br>
 <div class="input-group">
    <label for="exampleFormControlFile1">Eliga Imagen</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
  </div>
       
        <br>
            <div class="input-group">
        <span class="input-group-addon"> Precio Unitario:</span>
        <input type="text" class="form-control" placeholder="345.50"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="punitario" name="punitario" required>
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
        <span class="input-group-addon"> Descripcion</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="descripcion" name="descripcion" required>
        </div>
        <br>
          <div class="input-group">
        <span class="input-group-addon"> cantidad(s):</span>
        <input type="text" maxlength="40"  onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="cantidad" name="cantidad" required>
        
        </div>

          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>

        </div>

  
    
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

        </div>
          
        </div>
        
      
  

</div>
</div>
</div>
</form>