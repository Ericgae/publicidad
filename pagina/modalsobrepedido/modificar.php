<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idpedido'])) {
           $errors[] = "ID vacío";
        } else if (!empty($_POST['idpedido'])){
			
			
			
		

		// escaping, additionally removing everything that could be (html/javascript-) code
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
$fkprovedor=mysqli_real_escape_string($con,(strip_tags($_POST["fkProvedor"],ENT_QUOTES)));


		$producto=mysqli_real_escape_string($con,(strip_tags($_POST["producto"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($con,(strip_tags($_POST["precio"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		$anticipo=mysqli_real_escape_string($con,(strip_tags($_POST["anticipo"],ENT_QUOTES)));
		$total=mysqli_real_escape_string($con,(strip_tags($_POST["total"],ENT_QUOTES)));
		$status=mysqli_real_escape_string($con,(strip_tags($_POST["status"],ENT_QUOTES)));
	

		
		
		
		
		
		
		

		$idpedido=intval($_POST['idpedido']);
		$sql="UPDATE sobrepedido SET  fecha='".$fecha."',producto='".$producto."',precio='".$precio."',cantidad='".$cantidad."',anticipo='".$anticipo."',total='".$total."',status='".$status."' WHERE idpedido='".$idpedido."'";
		$query_update = mysqli_query($con,$sql);
		
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{ echo $query_update;
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