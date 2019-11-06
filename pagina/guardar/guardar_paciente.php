<?php


     include ('../connect_db.php');


//recoger datos que llegan


$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$fechanac = $_POST['fechanac'];
$correo = $_POST['correo'];
$telefonofijo = $_POST['telefonofijo'];
$celular = $_POST['celular'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$localidad = $_POST['localidad'];
$cpostal = $_POST['cpostal'];
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$pregunta6 = $_POST['pregunta6'];



//$consulta= "INSERT INTO  persona (nombre, apellido, edad) VALUES ('".$nombre."','".$apellido."','".$edad."')";




$sql= "INSERT INTO persona (nombre, apellidop, apellidom, sexo, edad, fechanac, correo, telefonofijo, celular) VALUES ('".$nombre."','".$apellidop."','".$apellidom."','".$sexo."','".$edad."','".$fechanac."','".$correo."','".$telefonofijo."','".$celular."')";
mysqli_query($con,$sql);



$user_id= mysqli_insert_id($con);
$sql1 = "INSERT INTO direccion (fkpersona, calle, numero, estado, municipio, localidad, cpostal) VALUES ('".$user_id."','".$calle."','".$numero."','".$estado."','".$municipio."','".$localidad."','".$cpostal."')";
mysqli_query($con,$sql1);

$user_id= mysqli_insert_id($con);
$sql2= "INSERT INTO pregunta (fkpersona, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6) VALUES ('".$user_id."','".$pregunta1."','".$pregunta2."','".$pregunta3."','".$pregunta4."','".$pregunta5."','".$pregunta6."')";
mysqli_query($con,$sql2);

echo $sql, $sql1, $sql2;



echo "<script type=''>
   alert('Su Cita fue ingresado correctamente uno de nustros Empleados se comunicara con usted.');
   window.location='../paciente.php';
</script>";
 


 //A ver intenta con un echo o printf de $last_id a ver si toma algun valor y sino prueba poniendolo asi: $last_id = mysql_insert_id($res);
?>


