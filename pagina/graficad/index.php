<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Crear gráficos dinámicos con jQuery y xCharts - BaulPHP</title>
		<link href="assets/css/xcharts.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link href="../css/style.css" rel="stylesheet">
    
<link href="assets/css/daterangepicker.css" rel="stylesheet">
<style type="text/css">
figure {
   
    margin-left: -20px;
}
.input-mini{
	display: block;
    width: 70px;
    font-size: 10px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	margin-bottom:5px;
	
}
	
</style>


<script>
function myFunction() {
    window.print();
}
</script>
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
       
  
    </header>

    <!-- Begin page content -->
<br>
<br>
<div class="container">
 <h3 class="mt-5">Grafica de Pagos por Sesiones</h3>
 <hr>

<div class="row">
  <div class="col-12 col-md-12">
		<div id="content">
			
			<form class="form-horizontal" style="width:50%">
			  <fieldset>
		        <div class="input-prepend">
		          <span class="add-on"><i class="icon-calendar"></i></span><input class="form-control" type="text" name="range" id="range" />
		        </div>
			  </fieldset>
              <br>
             <div style="margin:20px;"> 
            <button class="btn btn-primary" onClick="myFunction()">Imprimir Gráfico</button></div>
			</form>
			
			<div id="placeholder">
				<figure id="chart"></figure>
			</div>

		</div>

		<script src="jquery.min.js"></script>

 <script src="../../js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/d3/2.10.0/d3.v2.js"></script>
		<script src="assets/js/xcharts.min.js"></script>
		<script src="assets/js/sugar.min.js"></script>
		<script src="assets/js/daterangepicker.js"></script>
		<script src="assets/js/script.js"></script>
        <script src="http://cdn.tutorialzine.com/misc/adPacks/v1.js" async></script>

<!-- Fin Contenido --> 
</div>



</div><!-- Fin row -->


</div><!-- Fin container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    
  </body>
</html>


<?php
require_once('setup.php');

?>