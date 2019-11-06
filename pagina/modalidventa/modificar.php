<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['ididentificacion'])) {
           $errors[] = "ID vacío";
   
		
		}   else if (
			!empty($_POST['ididentificacion'])
		
			


			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$ocupacion=mysqli_real_escape_string($con,(strip_tags($_POST["ocupacion"],ENT_QUOTES)));
		$actividadfisica=mysqli_real_escape_string($con,(strip_tags($_POST["actividadfisica"],ENT_QUOTES)));
		$deporte=mysqli_real_escape_string($con,(strip_tags($_POST["deporte"],ENT_QUOTES)));
		$atraumaticos=mysqli_real_escape_string($con,(strip_tags($_POST["atraumaticos"],ENT_QUOTES)));
		$pactual=mysqli_real_escape_string($con,(strip_tags($_POST["pactual"],ENT_QUOTES)));
		$efisica=mysqli_real_escape_string($con,(strip_tags($_POST["efisica"],ENT_QUOTES)));
		$estatura=mysqli_real_escape_string($con,(strip_tags($_POST["estatura"],ENT_QUOTES)));
		$peso=mysqli_real_escape_string($con,(strip_tags($_POST["peso"],ENT_QUOTES)));
		$talla=mysqli_real_escape_string($con,(strip_tags($_POST["talla"],ENT_QUOTES)));
		$temperatura=mysqli_real_escape_string($con,(strip_tags($_POST["temperatura"],ENT_QUOTES)));
		$diagnostico=mysqli_real_escape_string($con,(strip_tags($_POST["diagnostico"],ENT_QUOTES)));
		$patologiasa=mysqli_real_escape_string($con,(strip_tags($_POST["patologiasa"],ENT_QUOTES)));
		$objtratamiento=mysqli_real_escape_string($con,(strip_tags($_POST["objtratamiento"],ENT_QUOTES)));
		$electroestimulacion=mysqli_real_escape_string($con,(strip_tags($_POST["electroestimulacion"],ENT_QUOTES)));
		$corrientee=mysqli_real_escape_string($con,(strip_tags($_POST["corrientee"],ENT_QUOTES)));
		$modulacione=mysqli_real_escape_string($con,(strip_tags($_POST["modulacione"],ENT_QUOTES)));
		$duracione=mysqli_real_escape_string($con,(strip_tags($_POST["duracione"],ENT_QUOTES)));
		$ultrasonido=mysqli_real_escape_string($con,(strip_tags($_POST["ultrasonido"],ENT_QUOTES)));
		$frecuenciau=mysqli_real_escape_string($con,(strip_tags($_POST["frecuenciau"],ENT_QUOTES)));
		$potenciau=mysqli_real_escape_string($con,(strip_tags($_POST["potenciau"],ENT_QUOTES)));
		$duracionu=mysqli_real_escape_string($con,(strip_tags($_POST["duracionu"],ENT_QUOTES)));
		$laserinfrarojo=mysqli_real_escape_string($con,(strip_tags($_POST["laserinfrarojo"],ENT_QUOTES)));
		$modalidadl=mysqli_real_escape_string($con,(strip_tags($_POST["modalidadl"],ENT_QUOTES)));
		$duracionl=mysqli_real_escape_string($con,(strip_tags($_POST["duracionl"],ENT_QUOTES)));
		$termoterapia=mysqli_real_escape_string($con,(strip_tags($_POST["termoterapia"],ENT_QUOTES)));
		$modalidadt=mysqli_real_escape_string($con,(strip_tags($_POST["modalidadt"],ENT_QUOTES)));
		$duraciont=mysqli_real_escape_string($con,(strip_tags($_POST["duraciont"],ENT_QUOTES)));
		$ejercicio=mysqli_real_escape_string($con,(strip_tags($_POST["ejercicio"],ENT_QUOTES)));
		$notaingreso=mysqli_real_escape_string($con,(strip_tags($_POST["notaingreso"],ENT_QUOTES)));
		$notaalta=mysqli_real_escape_string($con,(strip_tags($_POST["notaalta"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));


		$ididentificacion=intval($_POST['ididentificacion']);
		$sql="UPDATE ficha_identificacion SET  ocupacion='".$ocupacion."', actividadfisica='".$actividadfisica."',
		deporte='".$deporte."', atraumaticos='".$atraumaticos."', pactual='".$pactual."', efisica='".$efisica."', estatura='".$estatura."', peso='".$peso."',
		 talla='".$talla."', temperatura='".$temperatura."', diagnostico='".$diagnostico."', patologiasa='".$patologiasa."', objtratamiento='".$objtratamiento."', electroestimulacion='".$electroestimulacion."',
		  corrientee='".$corrientee."', modulacione='".$modulacione."', duracione='".$duracione."', ultrasonido='".$ultrasonido."', frecuenciau='".$frecuenciau."', potenciau='".$potenciau."'
		  , laserinfrarojo='".$laserinfrarojo."', modalidadl='".$modalidadl."', duracionl='".$duracionl."', termoterapia='".$termoterapia."', modalidadt='".$modalidadt."'
		  , duraciont='".$duraciont."', ejercicio='".$ejercicio."', notaingreso='".$notaingreso."', notaalta='".$notaalta."', fecha='".$fecha."' 	WHERE ididentificacion='".$ididentificacion."'";
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