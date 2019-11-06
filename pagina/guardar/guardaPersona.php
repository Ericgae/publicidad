<?php


     include ('../connect_db.php');


//recoger datos que llegan


$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$tel = $_POST['tel'];








//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO persona (nombre, apellidop, apellidom, tel) VALUES ('".$nombre."','".$apellidop."','".$apellidom."','".$tel."')";
//mysqli_query($con,$sql1);


echo $sql; 

$resultadoconsulta = mysqli_query($con,$sql);

if($resultadoconsulta != 0)
{
		echo "<html>
		<head>
		</head>
		<body>
		<meta http-equiv='REFRESH' content='0 ; url=../modaltipo/listatipo.php'>
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
		meta http-equiv='REFRESH' content='0 ; url=../modaltipo/listatipo.php'>
		<script>
			alert('Error al Guardar la informacion');
		</script>
		</body>
		</html>
		";		
}

?>

