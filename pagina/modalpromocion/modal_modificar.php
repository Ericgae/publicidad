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
     <div class="input-group">
        <span class="input-group-addon"> Nombre(s):</span>
        <input type="text" maxlength="20" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="nombref" name="nombref" required>
        <input type="hidden" class="form-control" id="idfisioterapeuta" name="idfisioterapeuta">
      
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Apellido paterno:</span>
        <input type="text" class="form-control" maxlength="20"  placeholder="lopez" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" id="apellidopf" name="apellidopf" required>
      
        </div>
 

        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Apellido materno:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="apellidomf" name="apellidomf" required>
        </div>
         <br>
        <div class="input-group ">
        <span class="input-group-addon"> edad:</span>
        <input type="number" type="number"  class="form-control" onKeyPress="return SoloNumeros(event);" placeholder="14" id="edad" name="edad" required>
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon">  Sexo:</span>
        <input type="text" class="form-control" placeholder="mendoza" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="sexo" name="sexo" required>
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> fecha de nacimineto:</span>
        <input type="date" class="form-control"  id="fechanac" name="fechanac" required>
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon"> telefono celular:</span>
        <input type="text" class="form-control" maxlength="6" onKeyPress="return SoloNumeros(event);" placeholder="121334" id="celular" name="celular">
        </div>
        <br>
         <div class="input-group ">
        <span class="input-group-addon"> Nombre De Usuario:</span>
        <input type="text" class="form-control"  placeholder="pedro88" id="user" name="user">
        </div>
        
        <br>
         <div class="input-group ">
        <span class="input-group-addon"> Contraseña:</span>
        <input type="text" class="form-control" maxlength="6"   placeholder="pedrito88" id="password" name="password">
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Correo:</span>
        <input type="text" class="form-control"  placeholder="juan@hotmail.com" id="email" name="email">
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Contraseña Administrador :</span>
        <input type="email" class="form-control"   placeholder="pedrococo" id="pasadmin" name="pasadmin">
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