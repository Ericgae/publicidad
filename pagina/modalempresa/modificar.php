<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idempresa'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['nombree'])){
			$errors[] = "nombre vacío";
		} else if (empty($_POST['propietarioe'])){
			$errors[] = "propietario vacío";

		
		
		}   else if (
			!empty($_POST['idempresa']) &&
			!empty($_POST['nombree']) && 
			!empty($_POST['propietarioe']) 
			
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombree=mysqli_real_escape_string($con,(strip_tags($_POST["nombree"],ENT_QUOTES)));
		$propietarioe=mysqli_real_escape_string($con,(strip_tags($_POST["propietarioe"],ENT_QUOTES)));
		$calle=mysqli_real_escape_string($con,(strip_tags($_POST["calle"],ENT_QUOTES)));
		$colonia=mysqli_real_escape_string($con,(strip_tags($_POST["colonia"],ENT_QUOTES)));
		$numero=mysqli_real_escape_string($con,(strip_tags($_POST["numero"],ENT_QUOTES)));
		$tel=mysqli_real_escape_string($con,(strip_tags($_POST["tel"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$nombrea=mysqli_real_escape_string($con,(strip_tags($_POST["nombrea"],ENT_QUOTES)));
		$direcciona=mysqli_real_escape_string($con,(strip_tags($_POST["direcciona"],ENT_QUOTES)));	
		

		
		
		
		
		
		
		

		$idempresa=intval($_POST['idempresa']);
		$iddireccion=intval($_POST['iddireccion']);
		$idalmacen=intval($_POST['idalmacen']);
		$sql1="UPDATE empresa SET  nombree='".$nombree."', propietarioe='".$propietarioe."' WHERE idempresa='".$idempresa."'";
		mysqli_query($con,$sql1);
		$sql2="UPDATE direccion SET  calle='".$calle."', colonia='".$colonia."', numero='".$numero."', tel='".$tel."', correo='".$correo."' WHERE iddireccion='".$iddireccion."'";
		mysqli_query($con,$sql2);
		$sql3="UPDATE almacen SET  nombrea='".$nombrea."', direcciona='".$direcciona."' WHERE idalmacen='".$idalmacen."'";
		mysqli_query($con,$sql3);
		
		
		

		$query_update = mysqli_query($con,$sql3);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
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
					<strong>Error!</strong> 
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