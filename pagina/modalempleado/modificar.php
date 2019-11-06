<?php

	# conectare la base de datos
    include ('../../connect_db.php');
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['idpersona'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['nombre'])){
			$errors[] = "nombre vacío";
		} else if (empty($_POST['apellidop'])){
			$errors[] = "apellidop vacío";
		} else if (empty($_POST['apellidom'])){
			$errors[] = "apellidom vacío";
		} else if (empty($_POST['tipoe'])){
			$errors[] = "tipo vacío";
		} else if (empty($_POST['password'])){
			$errors[] = "password vacío";
		} else if (empty($_POST['tel'])){
			$errors[] = "tel vacío";
		
		}   else if (
			!empty($_POST['idpersona']) &&
			!empty($_POST['nombre']) && 
			!empty($_POST['apellidop']) &&
			!empty($_POST['apellidom']) &&
			!empty($_POST['tipoe']) &&
			!empty($_POST['password']) &&
			!empty($_POST['tel'])

			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellidop=mysqli_real_escape_string($con,(strip_tags($_POST["apellidop"],ENT_QUOTES)));
		$apellidom=mysqli_real_escape_string($con,(strip_tags($_POST["apellidom"],ENT_QUOTES)));
		$tipo=mysqli_real_escape_string($con,(strip_tags($_POST["tipoe"],ENT_QUOTES)));
		$password=mysqli_real_escape_string($con,(strip_tags($_POST["password"],ENT_QUOTES)));
		$tel=mysqli_real_escape_string($con,(strip_tags($_POST["tel"],ENT_QUOTES)));
		//$fechanac=mysqli_real_escape_string($con,(strip_tags($_POST["fechanac"],ENT_QUOTES)));
		//$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		//$telefonofijo=mysqli_real_escape_string($con,(strip_tags($_POST["telefonofijo"],ENT_QUOTES)));
		//$celular=mysqli_real_escape_string($con,(strip_tags($_POST["celular"],ENT_QUOTES)));

		
		
		
		
		
		
		

		$idpersona=intval($_POST['idpersona']);
		$sql="UPDATE persona SET  nombre='".$nombre."', apeliidoP='".$apellidop."',
		apellidom='".$apellidom."', tel='".$tel."' WHERE idpersona='".$idpersona."'";
		mysqli_query($con,$sql);


		//$query_update = mysqli_query($con,$sql);
 $user_id= mysqli_insert_id($con);
 $sql1="UPDATE empleado SET  fkPersona='".$idpersona."', tipoE='".$tipo."', password='".$password."' WHERE fkPersona='".$idpersona."'";
		
 mysqli_query($con,$sql1);
 echo $sql, $sql1;

  echo "<script type=''>
   alert('El cliente fue moficicado correctamente.');
   window.location='../modalempleado/listaEmpleados.php';
</script>";
 

}
?>	