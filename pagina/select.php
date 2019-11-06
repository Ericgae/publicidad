<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<select class="selectpicker" data-show-subtext="true" data-live-search="true">
<?php
include "../connect_db.php";
$con = connect();
if (!$con->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
       die("Error cargando el conjunto de caracteres utf8");
}
$consulta = "SELECT * FROM persona";
$resultado = mysqli_query($con , $consulta);
$contador=0;
 
while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
<option data-subtext="<?php echo $misdatos["iso"]; ?>"><?php echo $misdatos["nombre_pais"]; ?></option>
<?php }?>          
</select>