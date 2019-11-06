
	<?php

 $con=@mysqli_connect('sql301.epizy.com', 'epiz_22238794', 'hvnuMN3D5hjzVHPy', 'epiz_22238794_clinica');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}


//recoger datos que llegan


$nombref = $_POST['nombref'];
$apellidopf = $_POST['apellidopf'];
$apellidomf = $_POST['apellidomf'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$fechanac = $_POST['fechanac'];
$celular = $_POST['celular'];
$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$pasadmin = $_POST['pasadmin'];


$consulta= "INSERT INTO  fisioterapeuta (nombref, apellidopf, apellidomf, edad, sexo, fechanac, celular, user, password, email, pasadmin) VALUES ( '".$nombref."','".$apellidopf."','".$apellidomf."','".$edad."','".$sexo."','".$fechanac."','".$celular."','".$user."','".$password."','".$email."','".$pasadmin."')";

echo $consulta;

$resultadoconsulta = mysqli_query($con,$consulta);

if($resultadoconsulta != 0)
{
		echo "<html>
		<head>
		</head>
		<body>
		<meta http-equiv='REFRESH' content='0 ; url=../modalterapeuta/listaterapeuta.php'>
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
		meta http-equiv='REFRESH' content='0 ; url=../paginas/tutor.php'>
		<script>
			alert('Error al Guardar la informacion');
		</script>
		</body>
		</html>
		";		
}

?>

