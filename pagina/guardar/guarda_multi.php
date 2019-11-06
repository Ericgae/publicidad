<?php


     include ('../../connect_db.php');


//recoger datos que llegan






//		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
//		$apellidop=mysqli_real_escape_string($con,(strip_tags($_POST["apellidop"],ENT_QUOTES)));
//		$apellidom=mysqli_real_escape_string($con,(strip_tags($_POST["apellidom"],ENT_QUOTES)));
//		$sexo=mysqli_real_escape_string($con,(strip_tags($_POST["sexo"],ENT_QUOTES)));
//		$edad=mysqli_real_escape_string($con,(strip_tags($_POST["edad"],ENT_QUOTES)));
//		$fechanac=mysqli_real_escape_string($con,(strip_tags($_POST["fechanac"],ENT_QUOTES)));
//		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
//		$telefonofijo=mysqli_real_escape_string($con,(strip_tags($_POST["telefonofijo"],ENT_QUOTES)));
//		$celular=mysqli_real_escape_string($con,(strip_tags($_POST["celular"],ENT_QUOTES)));
//		$calle=mysqli_real_escape_string($con,(strip_tags($_POST["calle"],ENT_QUOTES)));
//		$numero=mysqli_real_escape_string($con,(strip_tags($_POST["numero"],ENT_QUOTES)));
//		$estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
//		$municipio=mysqli_real_escape_string($con,(strip_tags($_POST["municipio"],ENT_QUOTES)));
//		$localidad=mysqli_real_escape_string($con,(strip_tags($_POST["localidad"],ENT_QUOTES)));
//		$cpostal=mysqli_real_escape_string($con,(strip_tags($_POST["cpostal"],ENT_QUOTES)));


//$consulta= "INSERT INTO  persona (nombre, apellido, edad) VALUES ('".$nombre."','".$apellido."','".$edad."')";


 if (empty($_POST['fkVenta'])){
			$errors[] = "Código vacío";
		
		}   else if (
			
			!empty($_POST['fkVenta'])
			
		){


$fkVenta = $_POST['fkVenta'];
$nitrogeno = $_POST['nitrogeno'];
$tipo_poliza = $_POST['tipo_poliza'];
$alineacion = $_POST['alineacion'];
$balatas = $_POST['balatas'];
$suspencion = $_POST['suspencion'];
$llantas = $_POST['llantas'];
$baterias = $_POST['baterias'];
$pulido_faro = $_POST['pulido_faro'];
$rotacion = $_POST['rotacion'];
$llanta_desecha = $_POST['llanta_desecha'];
$especificacion = $_POST['especificacion'];

		
		$sql="INSERT INTO multipuntos (nitrogeno, tipo_poliza, alineacion, balatas, suspencion, llantas, baterias, pulido_faro, rotacion, llanta_desecha, especificacion, fkVenta) 
VALUES ('".$nitrogeno."','".$tipo_poliza."','".$alineacion."','".$balatas."','".$suspencion."','".$llantas."','".$baterias."','".$pulido_faro."','".$rotacion."','".$llanta_desecha."','".$especificacion."','".$fkVenta."')";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error! seleccione una cotitizacion</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}


?>
