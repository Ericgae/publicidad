<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idtipo'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['tipo'])){
			$errors[] = "tipo vacío";
	
		
		}   else if (
			!empty($_POST['idtipo']) &&
			!empty($_POST['tipo']) 
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$tipo=mysqli_real_escape_string($con,(strip_tags($_POST["tipo"],ENT_QUOTES)));
	

		
		
		
		
		
		
		

		$idtipo=intval($_POST['idtipo']);
		$sql="UPDATE tipo SET  tipo='".$tipo."'	WHERE idtipo='".$idtipo."'";
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