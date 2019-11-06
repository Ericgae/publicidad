<?php


     include ('../../connect_db.php');


//recoger datos que llegan


$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$punitario = $_POST['punitario'];
$punitariod = $_POST['punitariod'];
$punitariot = $_POST['punitariot'];
$fkAlmacen = $_POST['fkAlmacen'];
$fkTipo = $_POST['fkTipo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];


         $foto=$_FILES['foto']['name'];
        $ruta=$_FILES['foto']['tmp_name'];
        $destino='../../articulos/'.$foto;
        copy($ruta, $destino);

	






//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO articulo (nombre, codigo, marca, foto, punitario, punitariod, punitariot, fkAlmacen, fkTipo, descripcion, cantidad) VALUES
 ('".$nombre."','".$codigo."','".$marca."','".$destino."','".$punitario."','".$punitariod."','".$punitariot."','".$fkAlmacen."','".$fkTipo."','".$descripcion."','".$cantidad."')";
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

