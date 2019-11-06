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
        <h4 class="modal-title" id="exampleModalLabel">Tabla Multipuntos:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
     <div class="input-group">
        <span class="input-group-addon"> Usuario:</span>
        <input type="text" maxlength="20"  readonly  id="usuario" name="usuario" required>
        <input type="hidden" class="form-control" id="idmulti" name="idmulti">
      
        </div>
        
        <div class="input-group">
        <span class="input-group-addon"> Poliza de Garantia:</span>
        <input type="int" class="form-control" maxlength="20" readonly  id="tipoliza" name="tipoliza" required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Alineacion:</span>
        <input type="text" class="form-control"  maxlength="20" id="alineacion" name="alineacion" readonly required>
        </div>
       <br>
        <div class="input-group ">
        <span class="input-group-addon">Balatas:</span>
        <input type="text" class="form-control"  maxlength="50" id="balatas" name="balatas" readonly required>
        </div>
        <br>
        <div class="input-group ">
        <span class="input-group-addon"> Suspencion:</span>
        <input type="text"  class="form-control"  id="suspencion" name="suspencion" readonly required>
        </div>
       <br>
     <div class="input-group ">
        <span class="input-group-addon"> Llantas:</span>
        <input type="text"  class="form-control"  id="llantas" name="llantas" readonly required>
        </div>
       <br>
       <div class="input-group ">
        <span class="input-group-addon"> Baterias:</span>
        <input type="text"  class="form-control"  id="baterias" name="baterias" readonly required> </div>
       <br>
       <div class="input-group ">
        <span class="input-group-addon"> Pulido Faros:</span>
        <input type="text"  class="form-control"  id="pulidofaro" name="pulidofaro" readonly required> </div>
       <br>
       <div class="input-group ">
        <span class="input-group-addon"> Rotacion:</span>
        <input type="text"  class="form-control"  id="rotacion" name="rotacion" readonly required> </div>
       <br>
       <div class="input-group ">
        <span class="input-group-addon"> Llantas Deshechas:</span>
        <input type="text"  class="form-control"  id="baterias" name="baterias" readonly required> </div>
       <br>
       <div class="input-group ">
        <span class="input-group-addon"> Especificacion :</span>
        <input type="text"  class="form-control"  id="especificacion" name="especificacion" readonly required> </div>
       <br>

	   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</form>