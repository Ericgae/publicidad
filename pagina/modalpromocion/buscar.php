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
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM fisioterapeuta ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listaterapeuta.php';
		//consulta principal para recuperar los datos


		$dato =strval($_POST ['dato']); 
		$query = mysqli_query($con,"SELECT * FROM fisioterapeuta  WHERE idfisioterapeuta like '%$dato%' or apellidopf LIKE '%$dato%' OR nombref LIKE '%$dato%' OR apellidomf LIKE '%$dato%'  LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>Nombre(s)</th>
				   <th>Correo</th>
				  <th>Edad</th>
				  <th>Feha de Nacimiento</th>
				   <th>Celular</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idfisioterapeuta'];?></td>
					<td><?php echo $row['apellidopf']." ".$row['apellidomf']." ".$row['nombref'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['edad'];?></td>
					<td><?php echo $row['fechanac'];?></td>
					<td><?php echo $row['celular'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idfisioterapeuta="<?php echo $row['idfisioterapeuta']?>"  data-nombref="<?php echo $row['nombref']?>" data-apellidopf="<?php echo $row['apellidopf']?>" data-apellidomf="<?php echo $row['apellidomf']?>" data-edad="<?php echo $row['edad']?>"  data-sexo="<?php echo $row['sexo']?>" data-fechanac="<?php echo $row['fechanac']?>" data-celular="<?php echo $row['celular']?>" data-user="<?php echo $row['user']?>" data-password="<?php echo $row['password']?>" data-email="<?php echo $row['email']?>" data-pasadmin="<?php echo $row['pasadmin']?>" ><i class='glyphicon glyphicon-edit'></i> Modificar</button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idfisioterapeuta="<?php echo $row['idfisioterapeuta']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
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