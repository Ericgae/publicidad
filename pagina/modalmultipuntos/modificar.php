<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idauto'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['marca'])){
			$errors[] = "marca vacío";
		} else if (empty($_POST['placas'])){
			$errors[] = "placas vacío";

		
		
		}   else if (
			!empty($_POST['idauto']) &&
			!empty($_POST['marca']) && 
			!empty($_POST['placas']) 
			
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$marca=mysqli_real_escape_string($con,(strip_tags($_POST["marca"],ENT_QUOTES)));
		$modelo=mysqli_real_escape_string($con,(strip_tags($_POST["modelo"],ENT_QUOTES)));
		$placas=mysqli_real_escape_string($con,(strip_tags($_POST["placas"],ENT_QUOTES)));
		$color=mysqli_real_escape_string($con,(strip_tags($_POST["color"],ENT_QUOTES)));
		$rodado=mysqli_real_escape_string($con,(strip_tags($_POST["rodado"],ENT_QUOTES)));
	
		

		
		
		
		
		
		
		

		$idauto=intval($_POST['idauto']);
		$sql="UPDATE automovil SET  marca='".$marca."', modelo='".$modelo."', color='".$color."', placas='".$placas."', rodado='".$rodado."' WHERE idauto='".$idauto."'";
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