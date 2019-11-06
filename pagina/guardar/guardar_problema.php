<?php

 
     include ('../connect_db.php');


//recoger datos que llegan


$problema = $_POST['problema'];


//		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
//		$apellidop=mysqli_real_escape_string($con,(strip_tags($_POST["apellidop"],ENT_QUOTES)));
//		$apellidom=mysqli_real_escape_string($con,(strip_tags($_POST["apellidom"],ENT_QUOTES)));
//		$sexo=mysqli_real_escape_string($con,(strip_tags($_POST["sexo"],ENT_QUOTES)));
//		$edad=mysqli_real_escape_string($con,(strip_tags($_POST["edad"],ENT_QUOTES)));
//		$fechanac=mysqli_real_escape_string($con,(strip_tags($_POST["fechanac"],ENT_QUOTES)));
//		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
//		$telefonofijo=mysqli_real_escape_string($con,(strip_tags($_POST["telefonofijo"],ENT_QUOTES)));
//		$celular=mysqli_real_escape_string($con,(strip_tags($_POST["celular"],ENT_QUOTES)));
//		$calle=mysqli_real_escape_string($con,(strip_tags($_POST["calle"],ENT_QUOTES)));
//		$numero=mysqli_real_escape_string($con,(strip_tags($_POST["numero"],ENT_QUOTES)));
//		$estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
//		$municipio=mysqli_real_escape_string($con,(strip_tags($_POST["municipio"],ENT_QUOTES)));
//		$localidad=mysqli_real_escape_string($con,(strip_tags($_POST["localidad"],ENT_QUOTES)));
//		$cpostal=mysqli_real_escape_string($con,(strip_tags($_POST["cpostal"],ENT_QUOTES)));


//$consulta= "INSERT INTO  persona (nombre, apellido, edad) VALUES ('".$nombre."','".$apellido."','".$edad."')";



//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO problema (problema) VALUES ('".$problema."')";
//mysqli_query($con,$sql);






echo $sql; 

$resultadoconsulta = mysqli_query($con,$sql);

if($resultadoconsulta != 0)
{
		echo "<html>
		<head>
		</head>
		<body>
		<meta http-equiv='REFRESH' content='0 ; url=../modalproblema/listaproblema.php'>
		<script>
			alert('Datos Guardados con Exito...');
		</script>
		</body>
		</html>
		";		
}
else
{
		echo "<html>
		<head>
		</head>
		<body>
		meta http-equiv='REFRESH' content='0 ; url=../modalproblema/listaproblema.php'>
		<script>
			alert('Error al Guardar la informacion');
		</script>
		</body>
		</html>
		";		
}

?>

 