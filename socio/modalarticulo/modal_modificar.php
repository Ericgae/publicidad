   <?php



 include ('../../connect_db.php');

  $idarticulo=$_Post['idarticulo'];
    //consulta principal para recuperar los datos
    $query = mysqli_query($con,"SELECT *  FROM articulo ");
    

$row = mysqli_fetch_array($query)


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
        <h4 class="modal-title" id="exampleModalLabel">Modificar PAciente:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          

          
          <a class="fancybox" id="foto" name="foto" rel="gallery1" href="<?php echo $row['foto']; ?>" title="<?php echo $row['nombre']; ?>">
          <img src= <?php echo $row['foto']; ?> id="foto" name="foto" width ="100" height = "100">
        
  <div class="col-xs-6 col-md-3">
    <a  class="thumbnail">
     
     <img src ="get_image_name" id="foto" name="foto" width ="150" height = "150">
    </a>
     
  </div>
  

     <div class="input-group">
        <span class="input-group-addon"> nombre:</span>
        <input type="text" class="form-control"  id="nombre" name="nombre" required>
        <input type="hidden" class="form-control" id="idarticulo" name="idarticulo">
      
        </div>

        <br>
        <div class="input-group">
        <span class="input-group-addon"> codigo:</span>
        <input type="text" class="form-control"  id="codigo" name="codigo" required>
        </div>
        <br>
         <div class="input-group">
        <span class="input-group-addon"> marca:</span>
        <input type="text" class="form-control"  id="marca" name="marca" required>
        </div>
        <br>

        <div class="input-group ">
        <span class="input-group-addon"> descripcion:</span>
        <textarea class="form-control"  onKeyUp="this.value = this.value.toUpperCase();" id="descripcion" name="descripcion" rows="3"></textarea>
       
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon">cantidad:</span>
        <input type="text" class="form-control"  onKeyUp="this.value = this.value.toUpperCase();" id="cantidad" name="cantidad" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> costo:</span>
        <input type="text"  class="form-control"  onKeyUp="this.value = this.value.toUpperCase();" id="punitario" name="punitario" required>
        </div>
       <br>
     
       
	   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>