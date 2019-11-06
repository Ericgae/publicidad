<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idproblema'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['problema'])){
			$errors[] = "nombre vacío";
	
		
		}   else if (
			!empty($_POST['idproblema']) &&
			!empty($_POST['problema']) 
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$problema=mysqli_real_escape_string($con,(strip_tags($_POST["problema"],ENT_QUOTES)));
	

		
		
		
		
		
		
		

		$idproblema=intval($_POST['idproblema']);
		$sql="UPDATE problema SET  problema='".$problema."'	WHERE idproblema='".$idproblema."'";
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