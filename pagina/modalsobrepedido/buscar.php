<?php


	# conectare la base de datos
     include ('../../connect_db.php');
			include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM problema ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listaproblema.php';
		//consulta principal para recuperar los datos


		$dato =strval($_POST ['dato']); 
		$query = mysqli_query($con,"SELECT * FROM problema  WHERE idproblema like '%$dato%' or problema LIKE '%$dato%'   LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>Problema</th>
			
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idproblema'];?></td>
					
					<td><?php echo $row['problema'];?></td>
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idproblema="<?php echo $row['idproblema']?>"  data-problema="<?php echo $row['problema']?>" ><i class='glyphicon glyphicon-edit'></i> Modificar</button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idproblema="<?php echo $row['idproblema']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
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

	

?>