<form name="formulario" method="post" action="template_form.php">
<div class="modal fade" id="dataimp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="exampleModalLabel">Ficha De Idanetificacion:</h4>
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">imprimir datos</button>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>

        
      <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">ocupacion</label>
    <input type="text" readonly class="form-control" id="ocupacion" name="ocupacion"  placeholder="">
     <input type="hidden" class="form-control" id="ididentificacion" name="ididentificacion">
    </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputPassword1">Actividad Fisica</label>
    <input type="text" class="form-control" readonly id="actividadfisica" name="actividadfisica" placeholder="">
  </div>
  </div>
   <div class="col-md-4">
  <div class="form-group">
  <label for="exampleInputPassword1">Deporte</label>
    <input type="text" class="form-control" readonly id="deporte" name="deporte" placeholder="">
</div>
</div>

<div class="col-md-6">
  <div class="form-group">
  <label for="exampleInputPassword1">Antecedentes Traumaticos</label>
    <input type="text" class="form-control" readonly id="atraumaticos" name="atraumaticos" placeholder="">
    </div>
    </div>
    <div class="col-md-6">
  <div class="form-group">
<label for="exampleInputPassword1">Patologia Actual</label>
  <input type="text" class="form-control" readonly id="pactual" name="pactual" placeholder=""> 
  </div>
  </div>
<div class="col-md-12">
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Exploracion fisica</label>
    <textarea class="form-control" readonly id="efisica" name="efisica" ></textarea>
     </div>
  </div>
     <div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1"> Estatura</label>
    <input type="text" class="form-control" readonly id="estatura" name="estatura" placeholder="">
</div>
</div>
 <div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">Peso</label>
    <input type="text" class="form-control" readonly id="peso" name="peso" placeholder="">
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">talla</label>
    <input type="text" class="form-control" readonly id="talla" name="talla">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">Temperatura</label>
    <input type="text" class="form-control" readonly id="temperatura" name="temperatura">
</div>
</div>
<div class="col-md-12">
  <div class="form-group">
<label for="exampleFormControlTextarea1">Diagnostico</label>
    <textarea class="form-control" readonly id="diagnostico" name="diagnostico"></textarea>
 </div>
</div>
<div class="col-md-12">
  <div class="form-group">
<label for="exampleInputPassword1">Patologias Asociadas</label>
    <input type="text" class="form-control" readonly id="patologiasa" name="patologiasa" placeholder="">
 </div>
</div>
<div class="col-md-12">
<div class="form-group ">
<label for="exampleInputPassword1">objetivo tratamiento</label>
    <input type="text" class="form-control" readonly id="objtratamiento" name="objtratamiento" placeholder="">
    </div>
    </div>

  <div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">tratamiento</label>
    <input type="text" class="form-control" readonly id="electroestimulacion" name="electroestimulacion" placeholder="">
 </div>
</div>
<div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Corriente</label>
    <input type="text" class="form-control" readonly id="corrientee" name="corrientee" placeholder="">
    </div>
                      </div>
 <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Modulacion</label>
<input type="text" class="form-control" readonly id="modulacione" name="modulacione" placeholder="">
 </div>
                      </div>
    <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
    <input type="text" class="form-control" readonly id="duracione" name="duracione" placeholder="">
    </div>
    </div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">tratamiento</label>
    <input type="text"  readonly class="form-control" readonly id="ultrasonido" name="ultrasonido" placeholder="">
 </div>
</div>
<div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Frecuencia</label>
    <input type="text"  class="form-control" readonly id="frecuenciau" name="frecuenciau" placeholder="">
    </div>
                      </div>
 <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Potencia</label>
<input type="text" class="form-control" readonly id="potenciau" name="potenciau" placeholder="">
 </div>
                      </div>
    <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
    <input type="text" class="form-control" readonly id="duracionu" name="duracionu" placeholder="">
    </div>
    </div>
<div class="col-md-4">
  <div class="form-group">
<label for="exampleInputPassword1">tratamiento</label>
    <input type="text" class="form-control" readonly id="laserinfrarojo" name="laserinfrarojo" placeholder="">
 </div>
</div>
<div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Modalidad</label>
    <input type="text" class="form-control" readonly id="modalidadl" name="modalidadl" placeholder="">
    </div>
                      </div>
 <div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
<input type="text" class="form-control" readonly id="duracionl" name="duracionl" placeholder="">
 </div>
                      </div>
                  <div class="col-md-4">
  <div class="form-group">
<label for="exampleInputPassword1">tratamiento</label>
    <input type="text" class="form-control" readonly id="termoterapia" name="termoterapia" placeholder="">
 </div>
</div>
<div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Modalidad</label>
    <input type="text" class="form-control" readonly id="modalidadt" name="modalidadt" placeholder="">
    </div>
                      </div>
 <div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
<input type="text" class="form-control" readonly  id="duraciont" name="duraciont" placeholder="">
 </div>
                      </div>
    
<div class="col-md-6">
<div class="form-group ">
<label for="exampleInputPassword1">Ejercicio</label>
    <input type="text" class="form-control" readonly id="ejercicio" name="ejercicio" placeholder="">
    </div>
    </div>
    

    
<div class="col-md-12">
<div class="form-group ">
<label for="exampleFormControlTextarea1">Nota de Ingreso</label>
    <textarea class="form-control" readonly id="notaingreso" name="notaingreso"></textarea>
    </div>
    </div>
<div class="col-md-12">
    <div class="form-group ">
<label for="exampleFormControlTextarea1">Nota de Alta</label>
    <textarea class="form-control" readonly id="notaalta" name="notaalta"></textarea>
    
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group ">
    <label for="exampleInputPassword1">Fecha</label>
  <input type="date" class="form-control" readonly id="fecha" name="fecha" name="fecha" required maxlength="30"> 
  </div>
  </div>
 <div class="modal-footer">
           
        
      </div>
      </div>
     
    </div>
  </div>

</div>

</form>