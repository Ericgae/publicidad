<?php

	# conectare la base de datos
   include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['idarticulo'])){
			$errors[] = "ID vacío";
		}   else if (
			!empty($_POST['idarticulo']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$idarticulo=intval($_POST['idarticulo']);
		
		$sql="DELETE FROM articulo WHERE idarticulo='".$idarticulo."'";
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