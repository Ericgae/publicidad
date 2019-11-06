<?php


	# conectare la base de datos
     include ('../../connect_db.php');
    
    
			include 'pagination.php'; //incluir el archivo de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 40; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM cita ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listacita.php';
		//consulta principal para recuperar los datos


		$dato =strval($_POST ['dato']); 
		$query = mysqli_query($con,"SELECT * FROM cita INNER JOIN persona ON persona.idpersona=cita.fkpersona  WHERE id like '%$dato%' or title LIKE '%$dato%'  ");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>CLiente</th>
				  <th>titulo</th>
				   <th>inicio</th>
				  <th>fin</th>
				
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['apellidop']." ".$row['apellidom']." ".$row['nombre'];?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php echo $row['start'];?></td>
					<td><?php echo $row['end'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>"  data-title="<?php echo $row['title']?>" data-color="<?php echo $row['color']?>" data-start="<?php echo $row['start']?>" data-end="<?php echo $row['end']?>" ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
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