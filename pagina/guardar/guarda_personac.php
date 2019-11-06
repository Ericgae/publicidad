<?php

 
     include ('../../connect_db.php');


//recoger datos que llegan


$nombre = $_POST['nombre'];
$apeliidoP = $_POST['apeliidoP'];
$apellidoM = $_POST['apellidoM'];
$tel = $_POST['tel'];
$tipoc = $_POST['tipoc'];
$supo = $_POST['supo'];


$consulta_paciente="SELECT tel FROM persona where tel= '$tel'";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);

if($num_renglones>0)  

{ 
echo "<script type=''>
   alert('El cliente ya fue registrado.');
   window.location='../modalcliente/listacliente.php';
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
$sql1 = "INSERT INTO cliente (fkPersona, tipoc, supo) VALUES ('".$user_id."','".$tipoc."','".$supo."')";
mysqli_query($con,$sql1);


echo $sql, $sql1;

echo "<script type=''>
   alert('El cliente fue ingresado correctamente.');
   window.location='../modalcliente/listacliente.php';
</script>";
 

}

?>

