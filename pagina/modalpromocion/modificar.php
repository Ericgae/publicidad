<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idfisioterapeuta'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['nombref'])){
			$errors[] = "nombre vacío";
		} else if (empty($_POST['apellidopf'])){
			$errors[] = "apellidop vacío";
		} else if (empty($_POST['apellidomf'])){
			$errors[] = "apellidom vacío";
		} else if (empty($_POST['edad'])){
			$errors[] = "edad vacío";
		} else if (empty($_POST['sexo'])){
			$errors[] = "sexo vacío";
		} else if (empty($_POST['fechanac'])){
			$errors[] = "fechanac vacío";
		} else if (empty($_POST['celular'])){
			$errors[] = "celular vacío";
		} else if (empty($_POST['user'])){
			$errors[] = "user vacío";
		} else if (empty($_POST['email'])){
			$errors[] = "email vacío";
		
		}   else if (
			!empty($_POST['idfisioterapeuta']) &&
			!empty($_POST['nombref']) && 
			!empty($_POST['apellidopf']) &&
			!empty($_POST['apellidomf']) &&
			!empty($_POST['edad']) &&
			!empty($_POST['sexo']) &&
			!empty($_POST['fechanac']) &&
			!empty($_POST['celular']) &&
			!empty($_POST['user']) &&
			!empty($_POST['email']) 
			
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombref=mysqli_real_escape_string($con,(strip_tags($_POST["nombref"],ENT_QUOTES)));
		$apellidopf=mysqli_real_escape_string($con,(strip_tags($_POST["apellidopf"],ENT_QUOTES)));
		$apellidomf=mysqli_real_escape_string($con,(strip_tags($_POST["apellidomf"],ENT_QUOTES)));
		$edad=mysqli_real_escape_string($con,(strip_tags($_POST["edad"],ENT_QUOTES)));
		$sexo=mysqli_real_escape_string($con,(strip_tags($_POST["sexo"],ENT_QUOTES)));
		$fechanac=mysqli_real_escape_string($con,(strip_tags($_POST["fechanac"],ENT_QUOTES)));
		$celular=mysqli_real_escape_string($con,(strip_tags($_POST["celular"],ENT_QUOTES)));
		$user=mysqli_real_escape_string($con,(strip_tags($_POST["user"],ENT_QUOTES)));
		$password=mysqli_real_escape_string($con,(strip_tags($_POST["password"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
		$pasadmin=mysqli_real_escape_string($con,(strip_tags($_POST["pasadmin"],ENT_QUOTES)));

		
		
		
		
		
		
		

		$idfisioterapeuta=intval($_POST['idfisioterapeuta']);
		$sql="UPDATE fisioterapeuta SET  nombref='".$nombref."', apellidopf='".$apellidopf."',
		apellidomf='".$apellidomf."', edad='".$edad."', sexo='".$sexo."', fechanac='".$fechanac."', celular='".$celular."', user='".$user."', password='".$password."', email='".$email."', pasadmin='".$pasadmin."'	WHERE idfisioterapeuta='".$idfisioterapeuta."'";
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