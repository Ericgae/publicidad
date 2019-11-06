<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idarticulo'])) {
           $errors[] = "ID vacío";
  
		
		
		}   else if (
			!empty($_POST['idarticulo'])
			
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$marca=mysqli_real_escape_string($con,(strip_tags($_POST["marca"],ENT_QUOTES)));
		$punitario=mysqli_real_escape_string($con,(strip_tags($_POST["punitario"],ENT_QUOTES)));
		$punitariod=mysqli_real_escape_string($con,(strip_tags($_POST["punitariod"],ENT_QUOTES)));
		$punitariot=mysqli_real_escape_string($con,(strip_tags($_POST["punitariot"],ENT_QUOTES)));
		$fkAlmacen=mysqli_real_escape_string($con,(strip_tags($_POST["fkAlmacen"],ENT_QUOTES)));
		$fkTipo=mysqli_real_escape_string($con,(strip_tags($_POST["fkTipo"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		

		
		

		
		
		

		$idarticulo=intval($_POST['idarticulo']);
		$sql="UPDATE articulo SET  nombre='".$nombre."', codigo='".$codigo."',
		marca='".$marca."', punitario='".$punitario."', punitariod='".$punitariod."', punitariot='".$punitariot."', fkAlmacen='".$fkAlmacen."', fkTipo='".$fkTipo."', descripcion='".$descripcion."', cantidad='".$cantidad."'  WHERE idarticulo='".$idarticulo."'";
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