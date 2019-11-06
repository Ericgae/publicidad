


  <?php


 include ('../../connect_db.php');
$consulta_paciente1="SELECT * FROM persona order by apellidop ";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);

$consulta_paciente="SELECT * FROM tipo ";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);


?>

<form name="formulario" method="post" id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<form>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="exampleModalLabel">Ficha De Idanetificacion:</h4>

      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>

        
      <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">ocupacion</label>
    <input type="text" class="form-control" id="ocupacion" name="ocupacion"  placeholder="">
    <input type="hidden" class="form-control" id="ididentificacion" name="ididentificacion">
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputPassword1">Actividad Fisica</label>
    <input type="text" class="form-control" id="actividadfisica" name="actividadfisica" placeholder="">
  </div>
  </div>
   <div class="col-md-4">
  <div class="form-group">
  <label for="exampleInputPassword1">Deporte</label>
    <input type="text" class="form-control" id="deporte" name="deporte" placeholder="">
</div>
</div>

<div class="col-md-6">
  <div class="form-group">
  <label for="exampleInputPassword1">Antecedentes Traumaticos</label>
    <input type="text" class="form-control" id="atraumaticos" name="atraumaticos" placeholder="">
    </div>
    </div>
    <div class="col-md-6">
  <div class="form-group">
<label for="exampleInputPassword1">Patologia Actual</label>
  <input type="text" class="form-control" id="pactual" name="pactual" placeholder=""> 
  </div>
  </div>
<div class="col-md-12">
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Exploracion fisica</label>
    <textarea class="form-control" id="efisica" name="efisica" ></textarea>
     </div>
  </div>
     <div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1"> Estatura</label>
    <input type="text" class="form-control" id="estatura" name="estatura" placeholder="">
</div>
</div>
 <div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">Peso</label>
    <input type="text" class="form-control" id="peso" name="peso" placeholder="">
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">talla</label>
    <input type="text" class="form-control" id="talla" name="talla">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">Temperatura</label>
    <input type="text" class="form-control" id="temperatura" name="temperatura">
</div>
</div>
<div class="col-md-12">
  <div class="form-group">
<label for="exampleFormControlTextarea1">Diagnostico</label>
    <textarea class="form-control" id="diagnostico" name="diagnostico"></textarea>
 </div>
</div>
<div class="col-md-12">
  <div class="form-group">
<label for="exampleInputPassword1">Patologias Asociadas</label>
    <input type="text" class="form-control" id="patologiasa" name="patologiasa" placeholder="">
 </div>
</div>
<div class="col-md-12">
<div class="form-group ">
<label for="exampleInputPassword1">objetivo tratamiento</label>
    <input type="text" class="form-control" id="objtratamiento" name="objtratamiento" placeholder="">
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
    <input type="text" class="form-control" id="corrientee" name="corrientee" placeholder="">
    </div>
                      </div>
 <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Modulacion</label>
<input type="text" class="form-control" id="modulacione" name="modulacione" placeholder="">
 </div>
                      </div>
    <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
    <input type="text" class="form-control" id="duracione" name="duracione" placeholder="">
    </div>
    </div>
<div class="col-md-3">
  <div class="form-group">
<label for="exampleInputPassword1">tratamiento</label>
    <input type="text"  readonly class="form-control" id="ultrasonido" name="ultrasonido" placeholder="">
 </div>
</div>
<div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Frecuencia</label>
    <input type="text"  class="form-control" id="frecuenciau" name="frecuenciau" placeholder="">
    </div>
                      </div>
 <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Potencia</label>
<input type="text" class="form-control" id="potenciau" name="potenciau" placeholder="">
 </div>
                      </div>
    <div class="col-md-3">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
    <input type="text" class="form-control" id="duracionu" name="duracionu" placeholder="">
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
    <input type="text" class="form-control" id="modalidadl" name="modalidadl" placeholder="">
    </div>
                      </div>
 <div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
<input type="text" class="form-control" id="duracionl" name="duracionl" placeholder="">
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
    <input type="text" class="form-control" id="modalidadt" name="modalidadt" placeholder="">
    </div>
                      </div>
 <div class="col-md-4">
 <div class="form-group ">
<label for="exampleInputPassword1">Duracion</label>
<input type="text" class="form-control" id="duraciont" name="duraciont" placeholder="">
 </div>
                      </div>
    
<div class="col-md-6">
<div class="form-group ">
<label for="exampleInputPassword1">Ejercicio</label>
    <input type="text" class="form-control" id="ejercicio" name="ejercicio" placeholder="">
    </div>
    </div>
    
  <div class="col-md-6">
      <div class="form-group ">
        <label class="col-sm-2 control-label">problema</label>
        <div >
        <select id="fktipo" name="fktipo" class="form-control"> 
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
                      </div>
    
<div class="col-md-12">
<div class="form-group ">
<label for="exampleFormControlTextarea1">Nota de Ingreso</label>
    <textarea class="form-control" id="notaingreso" name="notaingreso"></textarea>
    </div>
    </div>
<div class="col-md-12">
    <div class="form-group ">
<label for="exampleFormControlTextarea1">Nota de Alta</label>
    <textarea class="form-control" id="notaalta" name="notaalta"></textarea>
    
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group ">
    <label for="exampleInputPassword1">Fecha</label>
  <input type="date" class="form-control" id="fecha" name="fecha" name="fecha" required maxlength="30"> 
  </div>
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
