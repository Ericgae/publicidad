<?php

 
     include ('../../connect_db.php');


//recoger datos que llegan


$fkArticulo = $_POST['fkArticulo'];
$fkVendedor = $_POST['fkVendedor'];
$fkPromocion = $_POST['fkPromocion'];
$fkCliente = $_POST['fkCliente'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$total = $_POST['total'];
$extras = $_POST['extras'];
$fkAuto = $_POST['fkAuto'];
$fkTecnico = $_POST['fkTecninco'];









//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO ventas (fkArticulo, fkVendedor, fkPromocion, fkCliente, cantidad, fecha,hora,total,extras,fkAuto,fkTecninco) 
VALUES ('".$fkArticulo."','".$fkVendedor."','".$fkPromocion."','".$fkCliente."','".$cantidad."','".$fecha."','".$hora."','".$total."','".$extras."','".$fkAuto."','".$fkTecnico."')";
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

