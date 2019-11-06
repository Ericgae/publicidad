<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 40; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM cotizaciones_demo2 ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listaservicio.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM cotizaciones_demo2  LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
			<div class="col-md-10">
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>Cotizacion</th>
				  <th>Fecha</th>
				 <th>Cliente</th>
				 <th>Empleado</th>
				 <th>auto</th>
				 <th>condiciones</th>
				 <th>validez</th>
				 <th>Entrega</th>
				 
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['numero_cotizacion'];?></td>
					<td><?php echo $row['fecha_cotizacion'];?></td>
					<td><?php echo $row['fkcliente'];?></td>
					<td><?php echo $row['fkempleado'];?></td>
					<td><?php echo $row['fkauto'];?></td>
					<td><?php echo $row['condiciones'];?></td>
					<td><?php echo $row['validez'];?></td>
					<td><?php echo $row['entrega'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idtipo="<?php echo $row['idtipo']?>"  data-tipo="<?php echo $row['tipo']?>" ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idtipo="<?php echo $row['idtipo']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
						
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
