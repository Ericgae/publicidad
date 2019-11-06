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
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM persona ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listapaciente.php';
		//consulta principal para recuperar los datos


		$dato =strval($_POST ['dato']); 
		$query = mysqli_query($con,"SELECT * FROM persona  WHERE idpersona like '%$dato%' or apellidop LIKE '%$dato%' OR nombre LIKE '%$dato%' OR apellidom LIKE '%$dato%'  LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>Nombre(s)</th>
				   <th>Correo</th>
				  <th>Telefono Fijo</th>
				   <th>Celular</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idpersona'];?></td>
					<td><?php echo $row['apellidop']." ".$row['apellidom']." ".$row['nombre'];?></td>
					<td><?php echo $row['correo'];?></td>
					<td><?php echo $row['telefonofijo'];?></td>
					<td><?php echo $row['celular'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idpersona="<?php echo $row['idpersona']?>"  data-nombre="<?php echo $row['nombre']?>" data-apellidop="<?php echo $row['apellidop']?>" data-apellidom="<?php echo $row['apellidom']?>" data-sexo="<?php echo $row['sexo']?>"  data-edad="<?php echo $row['edad']?>" data-fechanac="<?php echo $row['fechanac']?>" data-correo="<?php echo $row['correo']?>"data-telefonofijo="<?php echo $row['telefonofijo']?>" data-celular="<?php echo $row['celular']?>" ><i class='glyphicon glyphicon-edit'></i> Modificar</button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idpersona="<?php echo $row['idpersona']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegistrar" data-idpersona="<?php echo $row['idpersona']?>" data-nombre="<?php echo $row['nombre']?>"><i class='glyphicon glyphicon-duplicate'></i> Ficha Identificacion</button>
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