<?php

  $con=@mysqli_connect('localhost', 'root', '', 'llantera');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }


//recoger datos que llegan


$fkCliente = $_POST['fkCliente'];
$fkProvedor = $_POST['fkProvedor'];
$fecha = $_POST['fecha'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$subtotal = $_POST['subtotal'];
$anticipo = $_POST['anticipo'];
$total = $_POST['total'];
$status = $_POST['status'];















//lo que tienes que hacer es 2 mysql_query():
//$user_id= mysqli_insert_id($con);
$sql= "INSERT INTO sobrepedido (fkCliente, fkProvedor,fecha,producto,precio,cantidad,subtotal,anticipo,total,status) VALUES ('".$fkCliente."','".$fkProvedor."','".$fecha."','".$producto."','".$precio."','".$cantidad."','".$subtotal."','".$anticipo."','".$total."','".$status."')";
mysqli_query($con,$sql);







echo $sql;
 
echo "<script type=''>
   alert('El cliente fue ingresado correctamente.');
   window.location='listaproblema.php';
</script>";
 



?>

