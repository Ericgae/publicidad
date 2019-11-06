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
        <span class="input-group-addon"> marca:</span>
        <input type="text" maxlength="20" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" class="form-control" placeholder="luis" requeride id="marca" name="marca" required>
        <input type="hidden" class="form-control" id="idauto" name="idauto">
      
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"> Modelo:</span>
        <input type="int" class="form-control" maxlength="20"  placeholder="lopez" onKeyUp="this.value = this.value.toUpperCase();" id="modelo" name="modelo" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Color:</span>
        <input type="text" class="form-control" placeholder="Nayarit" onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();" maxlength="20" id="color" name="color" required>
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon">Placas:</span>
        <input type="text" class="form-control" placeholder="mendoza"  onKeyUp="this.value = this.value.toUpperCase();" maxlength="50" id="placas" name="placas" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> rodado:</span>
        <input type="text"  class="form-control"  onKeyUp="this.value = this.value.toUpperCase();" placeholder="villa hidalgo" id="rodado" name="rodado" required>
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