<?php


$con=@mysqli_connect('localhost', 'u103228183_temoc', '3111082077', 'u103228183_llant');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
			//echo "Conexión exitossa!";

$count = 0;
    $sql2 = "SELECT * FROM cotizaciones_demo WHERE estadop = 0";
    $result = mysqli_query($con, $sql2);
    $count = mysqli_num_rows($result);
//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>