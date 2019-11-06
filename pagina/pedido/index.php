<?php


 include ('../connect_db.php');
$consulta_paciente1="SELECT * FROM persona, cliente where cliente.fkPersona=persona.idpersona";
$resultado_consulta1=mysqli_query($con,$consulta_paciente1);
$renglones_consulta1=mysqli_fetch_assoc($resultado_consulta1);
$num_renglones1=mysqli_num_rows($resultado_consulta1);

$consulta_paciente="SELECT * FROM persona, empleado where empleado.fkPersona=persona.idpersona";
$resultado_consulta=mysqli_query($con,$consulta_paciente);
$renglones_consulta=mysqli_fetch_assoc($resultado_consulta);
$num_renglones=mysqli_num_rows($resultado_consulta);

$consulta_paciente2="SELECT * FROM automovil";
$resultado_consulta2=mysqli_query($con,$consulta_paciente2);
$renglones_consulta2=mysqli_fetch_assoc($resultado_consulta2);
$num_renglones2=mysqli_num_rows($resultado_consulta2);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cotizador de Productos Online</title>
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- 
<script>
		
	function validarFormulario(){
 
		var atencion = document.getElementById('atencion').value;
		var tel1 = document.getElementById('tel1').value;
		var empresa = document.getElementById('empresa').value;
		var tel2 = document.getElementById('tel2').value;
		var email = document.getElementById('email').selectedIndex;
		
 
		
 
		//Test campo obligatorio
		if(atencion == null || atencion.length == 0 || /^\s+$/.test(atencion)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
 
		//Test edad
		if(tel1 == null || tel1.length == 0 || isNaN(tel1)){
			alert('ERROR: Debe ingresar un numero');
			return false;
		}

		if(empresa == null || empresa.length == 0 || /^\s+$/.test(empresa)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}

		if(tel2 == null || tel2.length == 0 || isNaN(tel2)){
			alert('ERROR: Debe ingresar un numero');
			return false;
		}
 
		//Test correo
		if(!(/\S+@\S+\.\S+/.test(email))){
			alert('ERROR: Debe escribir un correo válido');
			return false;
		}
 
 
		return true;
	}
 
	</script>
-->
  </head>
  <body>
    <div class="container">
		  <div class="row-fluid">
			<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-edit"></span> Nueva Cotización</h2>
			<hr>
			<form class="form-horizontal"  onsubmit="return validarFormulario()" role="form" id="datos_cotizacion">
				<div class="form-group row">
			
				  <label for="tel1" class="col-md-1 control-label">Atendio:</label>
							<div class="col-md-4">
												<select name="fkempleado" id="fkempleado" class="selectpicker" data-show-subtext="true" data-live-search="true">
					
			 <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta ['idEmpleado'];?>" > <?php echo $renglones_consulta['nombre'];?> <?php echo $renglones_consulta['apeliidoP'];?> <?php echo $renglones_consulta['apellidoM'];?> </option>
        
                      <?php
                      } while ($renglones_consulta = mysqli_fetch_array($resultado_consulta));
                        ?>
                      </select>	
									</div>
				</div>
						<div class="form-group row">
							<label for="nombre" class="col-md-1 control-label">Cliente:</label>
							<div class="col-md-4">
								<select name="fkcliente" id="fkcliente" class="selectpicker" data-show-subtext="true" data-live-search="true">
					
			 <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta1 ['idcliente'];?>" > <?php echo $renglones_consulta1['nombre'];?> <?php echo $renglones_consulta1['apeliidoP'];?> <?php echo $renglones_consulta1['apellidoM'];?> </option>
        
                      <?php
                      } while ($renglones_consulta1 = mysqli_fetch_array($resultado_consulta1));
                        ?>
                      </select>	
</div>
							
								<label for="nombre" class="col-md-1 control-label">Automovil:</label>
							<div class="col-md-3">
							
								<select name="fkauto" id="fkauto" class="selectpicker" data-show-subtext="true" data-live-search="true">
					
			 <?php
        do { 
          ?>
          <option value="<?php echo $renglones_consulta2 ['idauto'];?>" > <?php echo $renglones_consulta2['marca'];?> <?php echo $renglones_consulta2['modelo'];?> <?php echo $renglones_consulta2['placas'];?> </option>
        
                      <?php
                      } while ($renglones_consulta2 = mysqli_fetch_array($resultado_consulta2));
                        ?>
                      </select>	
				</div>
						</div>
				
				
				<div class="col-md-12">
					<div class="pull-right">
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
						 <span class="glyphicon glyphicon-plus"></span> Agregar productos
						</button>
					
						<button type="submit" class="btn btn-default">
						  <span class="glyphicon glyphicon-print"></span> Imprimir
						</button>
					</div>	
				</div>
			</form>
			<br><br>
		<div id="resultados" class='col-md-12'></div><!-- Carga los datos ajax -->
	
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Buscar productos</h4>
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)">
						</div>
						<button type="button" class="btn btn-default" onclick="load(1)"><span class='glyphicon glyphicon-search'></span> Buscar</button>
					  </div>
					</form>
					<div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="outer_div" ></div><!-- Datos ajax Final -->
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div>
			
			</div>	
		 </div>
	</div>

  
	<script type="text/javascript" src="pedido/js/VentanaCentrada.js"></script>

	<script type="text/javascript">
  /* Multiple Item Picker */
  $('.selectpicker').selectpicker({
    style: 'btn-default'
  });
	</script>
	<script>
		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'pedido/ajax/productos_cotizacion.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="pedido/img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}
	</script>
	<script>
	function agregar (id)
		{
			var precio_venta=document.getElementById('precio_venta_'+id).value;
			var cantidad=document.getElementById('cantidad_'+id).value;
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('cantidad_'+id).focus();
			return false;
			}
			if (isNaN(precio_venta))
			{
			alert('Esto no es un numero');
			document.getElementById('precio_venta_'+id).focus();
			return false;
			}
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "pedido/ajax/agregar_cotizador.php",
        data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});
		}
		
			function eliminar (id)
		{
			
			$.ajax({
        type: "GET",
        url: "pedido/ajax/agregar_cotizador.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}
		
		$("#datos_cotizacion").submit(function(){
		  alert();
		  var fkempleado = $("#fkempleado").val();
		  var fkcliente = $("#fkcliente").val();
		  var fkauto = $("#fkauto").val();
		  var condiciones = $("#condiciones").val();
		  var validez = $("#validez").val();
		  var entrega = $("#entrega").val();
		 VentanaCentrada('pedido/pdf/documentos/cotizacion_pdf.php?fkcliente='+fkcliente+'&fkempleado='+fkempleado+'&fkauto='+fkauto+'&condiciones='+condiciones+'&validez='+validez+'&entrega='+entrega,'Cotizacion','','1024','768','true');
	 	});
	</script>
  </body>
</html>