<?php


     include ('../../connect_db.php');


//recoger datos que llegan


$nombree = $_POST['nombree'];
$propietarioe = $_POST['propietarioe'];
$nombrea = $_POST['nombrea'];
$direcciona = $_POST['direcciona'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$numero = $_POST['numero'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
















//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql = "INSERT INTO empresa (nombree, propietarioe ) VALUES ('".$nombree."','".$propietarioe."')";
mysqli_query($con,$sql);





$user_id= mysqli_insert_id($con);
$sql1= "INSERT INTO almacen (fkempresa, nombrea, direcciona) VALUES ('".$user_id."','".$nombrea."','".$direcciona."')";
mysqli_query($con,$sql1);
																     


$sql2 = "INSERT INTO direccion (fkempresa, calle, colonia, numero, tel, correo ) VALUES ('".$user_id."','".$calle."','".$colonia."','".$numero."','".$tel."','".$correo."')";
mysqli_query($con,$sql2);



echo $sql, $sql1,$sql2;
 
echo "<script type=''>
   alert('Su Cita fue ingresado correctamente uno de nustros Empleados se comunicara con usted.');
   window.location='../modalempresa/listaempresa.php';
</script>";
 



?>

