<?php


     include ('../../connect_db.php');


//recoger datos que llegan


$fkPersona = $_POST['fkPersona'];
$tipo_cotiza = $_POST['tipo_cotiza'];
$tipo_servicio = $_POST['tipo_servicio'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$plas = $_POST['placas'];
$rodado = $_POST['rodado'];
$fkCliente = $_POST['fkCliente'];











//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO cliente (fkPersona, tipo_cotiza, tipo_servicio) VALUES ('".$fkPersona."','".$tipo_cotiza."','".$tipo_servicio."')";
mysqli_query($con,$sql);





$user_id= mysqli_insert_id($con);
$sql1 = "INSERT INTO automovil (marca, modelo, color, placas, rodado, fkCliente) VALUES ('".$marca."','".$modelo."','".$color."','".$placas."','".$rodado."','".$fkCliente."')";
mysqli_query($con,$sql1);


echo $sql, $sql1;

echo "<script type=''>
   alert('El automovil fue ingresado correctamente.');
   window.location='../paciente.php';
</script>";
 



?>

