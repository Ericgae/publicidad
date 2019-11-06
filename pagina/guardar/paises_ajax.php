<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM articulo ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listaarticulo.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * from articulo LEFT JOIN promocion ON promocion.fkArticulo=articulo.idarticulo LEFT JOIN tipo ON tipo.idtipo=articulo.fkTipo LEFT JOIN almacen on almacen.idalmacen=articulo.fkAlmacen order by idarticulo desc LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
			<div class="col-md-12">
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>foto</th>
				  <th>Nombre</th>
				  
				  <th>Codigo</th>
				  <th>Marca</th>
				  <th>Precio</th>
				  <th>Descripcion</th>	 
				  <th>Cantidad</th>
				  <th>Tipo</th>
				  <th>Almacen</th>
				  <th>Direccion</th>
				  <th>Promocion</th>
				   <th>fecha limite</th>
				 <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				
				?>
				
				<tr>
					<td><?php echo $row['idarticulo'];?></td>
					<td><img src="<?php echo $row['foto'];?>" height="50" weight="75"></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['codigo'];?></td>
					<td><?php echo $row['marca'];?></td>
					<td><?php echo $row['punitario'];?></td>
					<td><?php echo $row['descripcion'];?></td>
					<td><?php echo $row['cantidad'];?></td>
					<td><?php echo $row['tipo'];?></td>
					<td><?php echo $row['nombrea'];?></td>
					<td><?php echo $row['direcciona'];?></td>
					<td><?php echo $row['estatus'];?></td>
					<td><?php ; echo $row['fechaInicio'];echo "- hasta ";echo $row['fechaFin'];?></td>
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idarticulo="<?php echo $row['idarticulo']?>"  data-nombre="<?php echo $row['nombre']?>" data-codigo="<?php echo $row['codigo']?>"data-cantidad="<?php echo $row['cantidad']?>" data-direcciona="<?php echo $row['direcciona']?>" data-estatus="<?php echo $row['estatus']?>"  data-marca="<?php echo $row['marca']?>" data-punitario="<?php echo $row['punitario']?>" data-fechaInicio="<?php echo $row['fechaInicio']?>" data-fechaFin="<?php echo $row['fechaFin']?>" data-foto="<?php echo $row['foto']?>"><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idarticulo="<?php echo $row['idarticulo']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataPromo" data-idarticulo="<?php echo $row['idarticulo']?>" ><i class='glyphicon glyphicon-edit'></i></button>
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
