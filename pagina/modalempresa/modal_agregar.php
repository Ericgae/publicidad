

<form class="form-group" method="post" action="../guardar/guardaEmpresa.php">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
          
      <div class="input-group">
        <span class="input-group-addon"> Empresa:</span>
        <input type="text" maxlength="20"  onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="nombree" name="nombree" required>
        
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Propietario:</span>
        <input type="text" class="form-control" maxlength="20"  placeholder="lopez" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" id="propietarioe" name="propietarioe" required>


        </div>
        <br>
          <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">
            Registro De Almacen
          </h3>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Direccion:</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="direcciona" name="direcciona" required>
        </div>
      
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> nombre:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="nombrea" name="nombrea" required>
        </div>

        </div>
          <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title">
            Registro De Direccion
          </h3>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Calle:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="calle" name="calle" required>
        </div>
      
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> colonia:</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="colonia" name="colonia" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> numero:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="numero" name="numero" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> telefono:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return SoloNumeros(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="tel" name="tel" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> correo electronico:</span>
        <input type="text" class="form-control" placeholder="mendoza" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="correo" name="correo" required>
        </div>


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

          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
        </div>
          
        
      </div>
    
    </div>
  </div>
</div>
</form>