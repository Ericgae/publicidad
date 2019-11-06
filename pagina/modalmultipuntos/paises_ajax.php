<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){

		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM multipuntos");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listaauto.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM multipuntos, cotizaciones_demo2, cliente,empleado,persona, automovil WHERE multipuntos.fkVenta=cotizaciones_demo2.numero_cotizacion AND cliente.idcliente= cotizaciones_demo2.fkcliente AND empleado.idEmpleado=cotizaciones_demo2.fkempleado AND persona.idpersona=cliente.fkPersona AND cotizaciones_demo2.fkauto=automovil.idauto order by numero_cotizacion");
		
		if ($numrows>0){
			?>
				<script>
    $(document).ready(function () {
        $('#grid').DataTable();
    });
    
  </script>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
   
		<table id="grid" class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>Numero de Cotizacion</th>
				  <th>Auto Servicio</th>
				   <th>Fecha Inicio</th>
				  <th>Cliente</th>
				   <th>Empleado</th>
				<th>Fecha de Termino: </th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idmulti'];?></td>
					<td><?php echo $row['numero_cotizacion'];?></td>
					<td><?php echo "Marca: "; echo $row['marca']."  Modelo: ".$row['modelo']."  Placas: ".$row['placas'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><?php echo $row['apeliidoP']." ".$row['apellidoM']." ".$row['nombre'];?></td>
					<td><?php echo $row['usuario'];?></td>
					<td><?php echo $row['horaFin'];?></td>
					
					
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idmulti="<?php echo $row['idmulti']?>" data-nitrogeno="<?php echo $row['nitrogeno']?>"  data-tipoliza="<?php echo $row['tipo_poliza']?>" data-alineacion="<?php echo $row['alineacion']?>" data-balatas="<?php echo $row['balatas']?>" data-usuario="<?php echo $row['usuario']?>" data-suspencion="<?php echo $row['suspencion']?>" data-llantas="<?php echo $row['llantas']?>"data-baterias="<?php echo $row['baterias']?>" data-pulidofaro="<?php echo $row['pulido_faro']?>" data-rotacion="<?php echo $row['rotacion']?>" data-llantadesechaa="<?php echo $row['llantadesecha']?>" data-especificacion="<?php echo $row['especificacion']?>" ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idauto="<?php echo $row['idauto']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>

			<?php
		}
	}
?>
