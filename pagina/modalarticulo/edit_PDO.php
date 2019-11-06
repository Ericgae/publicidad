<?php

require_once ('../../connect_db.php');

$get_id=$_REQUEST['idarticulo'];
//echo  $get_id;

move_uploaded_file($_FILES["image"]["tmp_name"],"../../articulos/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];

$r="../../articulos/";
$sql = mysqli_query($con, "UPDATE articulo SET foto ='$r$location1' WHERE idarticulo = '$get_id' ");

exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='listaarticulo.php'</script>";
?>