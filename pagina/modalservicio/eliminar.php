<?php

	# conectare la base de datos
   include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['idproblema'])){
			$errors[] = "ID vacío";
		}   else if (
			!empty($_POST['idproblema']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$idproblema=intval($_POST['idproblema']);
		
		$sql="DELETE FROM problema WHERE problema='".$idproblema."'";
		$query_delete = mysqli_query($con,$sql);
			if ($query_delete){
				$messages[] = "Los datos han sido eliminados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente de seguro este dato esta relacionado con otro.".mysqli_error($con);
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