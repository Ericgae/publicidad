<?php
 include ('../connect_db.php');

$sql = "UPDATE cotizaciones_demo SET estadop = 1 WHERE estadop = 0";	
$result = mysqli_query($con, $sql);

$sql = "SELECT * FROM cotizaciones_demo ORDER BY id_cotizacion DESC limit 6";
$result = mysqli_query($con, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha_cotizacion"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'><span>". $fechaFormateada . "</span> </div>" . 
	"<div class='notification-comment'><span>Nombre:-</span>" . $row["nombre"]  . "</div>" .
	"<div class='notification-comment'><span>Telefono:-</span>" . $row["tel1"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>