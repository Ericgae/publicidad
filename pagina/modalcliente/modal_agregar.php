<form class="form-group" method="post" action="../guardar/guarda_personac.php">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
          
     <div class="col-md-4">
  
  </div>
<br>
     <div class="input-group">
        <span class="input-group-addon"> Nombre(s):</span>
        <input type="text" maxlength="20" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="nombre" name="nombre" required>
        
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Apellido paterno:</span>
        <input type="text" class="form-control" maxlength="20"  placeholder="lopez" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" id="apeliidoP" name="apeliidoP" required>
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
        <div class="input-group ">
        <span class="input-group-addon"> Apellido materno:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="apellidoM" name="apellidoM" required>
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon"> telefono:</span>
        <input type="text" class="form-control" placeholder="212121" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="tel" name="tel" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Tipo:</span>
        <select id="tipoc" name="tipoc" class="form-control" required>
          <option>cotizacion</option>
            <option>servicio</option>
        </select>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> como supo de nostros:</span>
        <select id="supo" name="supo" class="form-control" required>
          <option>Facebook</option>
            <option>Recomendacio</option>
            <option>Pagina Web</option>
            <option>vi el local</option>
        </select>
        </div>
        
        

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