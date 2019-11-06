<?php

 
     include ('../../connect_db.php');


//recoger datos que llegan


$descripcionp = $_POST['descripcionp'];
$codigop = $_POST['codigop'];
$idarticulo = $_POST['idarticulo'];
$estatus = $_POST['estatus'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];








//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO promocion (descripcionp, codigop, fkArticulo, estatus, fechaInicio, fechaFin)
 VALUES ('".$descripcionp."','".$codigop."','".$idarticulo."','".$estatus."','".$fechaInicio."','".$fechaFin."')";
//mysqli_query($con,$sql1);


echo $sql; 
$resultadoconsulta = mysqli_query($con,$sql);

if($resultadoconsulta != 0)
{
		echo "<html>
		<head>
		</head>
		<body>
		<meta http-equiv='REFRESH' content='0 ; url=../modalarticulo/listaarticulo.php'>
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
		meta http-equiv='REFRESH' content='0 ; url=../modalarticulo/listaarticulo.php'>
		<script>
			alert('Error al Guardar la informacion');
		</script>
		</body>
		</html>
		";		
}

?>



?>

