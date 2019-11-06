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

<form id="agregaPromo">
<div class="modal fade" id="dataPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">ingresar promocion:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
     <div class="input-group">
        <span class="input-group-addon"> id cliente:</span>
        <input type="text" maxlength="20" readonly id="idarticulo" name="idarticulo" >
        
      
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Descripcion:</span>
        <input type="text" class="form-control" maxlength="20"  placeholder="50% de descuento" this.value = this.value.toUpperCase();" id="descripcionp" name="descripcionp" required">
      
        </div>
 

        <br>
        <div class="input-group ">
        <?php
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;

}

?>
        <span class="input-group-addon"> codigo:</span>
        <input type="text" class="form-control" id="codigop" name="codigop" readonly  value=<?php echo generarCodigo(6);  ?>>
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon">  Estatus:</span>
        <select id="estatus" name="estatus" class="form-control" required>
          <option>activo</option>
            <option>inactivo</option>
        </select>
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon">  fecha inicio:</span>
        <input type="date" class="form-control"  maxlength="20" id="fechaInicio" name="fechaInicio" required>
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon">  fecha final:</span>
        <input type="date" class="form-control"  id="fechaFin" name="fechaFin" required>
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

