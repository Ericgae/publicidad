<?php

 
     include ('../../connect_db.php');

//recoger datos que llegan


$nombre = $_POST['nombre'];
$apeliidoP = $_POST['apeliidoP'];
$apellidoM = $_POST['apellidoM'];
$usuario = $_POST['usuario'];
$tel = $_POST['tel'];
$tipoE = $_POST['tipoE'];
$password = $_POST['password'];



$consulta_paciente="SELECT tel FROM persona where tel= '$tel'";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);

if($num_renglones>0)  

{ 
echo "<script type=''>
   alert('El empleado ya fue registrado.');
   window.location='../modalempleado/listaEmpleado.php';
</script>";
 
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 




//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO persona (nombre, apeliidoP, apellidoM, tel) VALUES ('".$nombre."','".$apeliidoP."','".$apellidoM."','".$tel."')";
mysqli_query($con,$sql);





$user_id= mysqli_insert_id($con);
$sql1 = "INSERT INTO empleado (fkPersona, tipoE, usuario, password) VALUES ('".$user_id."','".$tipoE."','".$usuario."','".$password."')";
mysqli_query($con,$sql1);


echo $sql, $sql1;

echo "<script type=''>
  alert('El empleado fue ingresado correctamente.');
   window.location='../modalempleado/listaEmpleados.php';
</script>";
 

}

?>

