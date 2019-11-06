<?php

				require_once("conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>

	<?php include("menu.html"); ?>
		
	</head>
	<body>
<br><br>
<br><br>

    <!-- Bootstrap core JavaScript -->
 <style type="text/css">
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Grafica de Cantidades Por Porductos'
        },
        subtitle: {
            text: 'Notice the difference between a 0 value and a null point'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
            <?php
$sql=mysql_query("SELECT * FROM articulo INNER JOIN tipo ON tipo.idtipo=articulo.fktipo order by cantidad desc");
while($res=mysql_fetch_array($sql)){            
?>                  
            
            ['<?php echo $res['nombre']; ?>'],
            <?php
            
}
?>
            ]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'cantidad',
            data: [
            
            <?php
$sql=mysql_query("select * from articulo order by cantidad desc");
while($res=mysql_fetch_array($sql)){            
?>          
            
            [<?php echo $res['cantidad'];?>],


            
<?php
}
?>
            ],

        }],


    });
});
        </script>

<div id="container" style="height: 400px"></div>
	</body>
</html>