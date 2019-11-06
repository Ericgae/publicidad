<?php


	# conectare la base de datos
     include ('../../connect_db.php');
    
    
			include 'pagination.php'; //incluir el archivo de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 40; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM direccion ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listadireccion.php';
		//consulta principal para recuperar los datos


		$dato =strval($_POST ['dato']); 
		$query = mysqli_query($con,"SELECT * FROM direccion  WHERE iddireccion like '%$dato%' or calle LIKE '%$dato%' OR numero LIKE '%$dato%' OR estado LIKE '%$dato%' OR municipio LIKE '%$dato%' OR localidad LIKE '%$dato%' OR cpostal LIKE '%$dato%'  ");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>Calle</th>
				   <th>Numero</th>
				  <th>Estado</th>
				   <th>Municipio</th>
				  <th>Localidad</th>
				  <th>Codigo Postal</th>
				  <th>Accion</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['iddireccion'];?></td>
					<td><?php echo $row['calle'];?></td>
					<td><?php echo $row['numero'];?></td>
					<td><?php echo $row['estado'];?></td>
					<td><?php echo $row['municipio'];?></td>
					<td><?php echo $row['localidad'];?></td>
					<td><?php echo $row['cpostal'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-iddireccion="<?php echo $row['iddireccion']?>"  data-calle="<?php echo $row['calle']?>" data-numero="<?php echo $row['numero']?>" data-estado="<?php echo $row['estado']?>" data-municipio="<?php echo $row['municipio']?>"  data-localidad="<?php echo $row['localidad']?>" data-cpostal="<?php echo $row['cpostal']?>" ><i class='glyphicon glyphicon-edit'></i> Modificar</button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-iddireccion="<?php echo $row['iddireccion']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
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