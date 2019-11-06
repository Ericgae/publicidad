<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idbitacora'])) {
           $errors[] = "ID vacío";
  
		
		
		}   else if (
			!empty($_POST['idbitacora'])
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$fechab=mysqli_real_escape_string($con,(strip_tags($_POST["fechab"],ENT_QUOTES)));
		$faseterapia=mysqli_real_escape_string($con,(strip_tags($_POST["faseterapia"],ENT_QUOTES)));
		$observaciones=mysqli_real_escape_string($con,(strip_tags($_POST["observaciones"],ENT_QUOTES)));
		$nsesion=mysqli_real_escape_string($con,(strip_tags($_POST["nsesion"],ENT_QUOTES)));
		$costo=mysqli_real_escape_string($con,(strip_tags($_POST["costo"],ENT_QUOTES)));
		

		
		
		
		
		
		
		

		$idbitacora=intval($_POST['idbitacora']);
		$sql="UPDATE bitacora SET  fechab='".$fechab."', faseterapia='".$faseterapia."',
		observaciones='".$observaciones."', nsesion='".$nsesion."', costo='".$costo."'  WHERE idbitacora='".$idbitacora."'";
		$query_update = mysqli_query($con,$sql);
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