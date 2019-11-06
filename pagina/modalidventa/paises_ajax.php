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
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM ficha_identificacion ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'listaidentificacion.php';
		
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM ficha_identificacion INNER JOIN persona ON persona.idpersona=ficha_identificacion.fkpersona order by ididentificacion desc LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>cliente</th>
				   <th>ocupacion</th>
				  
				   <th>deporte</th>
				 
				  <th>padeccimiento actual</th>
				  <th>exploracion fisica</th>
				 
				  <th>diagnostico</th>
				  <th>fecha</th>
				  <th>acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['ididentificacion'];?></td>
					
					<td><?php echo $row['apellidop']." ".$row['apellidom']." ".$row['nombre'];?></td>
					<td><?php echo $row['ocupacion'];?></td>
					
					<td><?php echo $row['deporte'];?></td>
					<td><?php echo $row['pactual'];?></td>
					<td><?php echo $row['efisica'];?></td>
					<td><?php echo $row['diagnostico'];?></td>
					<td><?php echo $row['fecha'];?></td>	
					
					<td>
						<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#dataimp" data-ididentificacion="<?php echo $row['ididentificacion']?>" data-ocupacion="<?php echo $row['ocupacion']?>" data-actividadfisica="<?php echo $row['actividadfisica']?>" data-deporte="<?php echo $row['deporte']?>" data-atraumaticos="<?php echo $row['atraumaticos']?>"  data-pactual="<?php echo $row['pactual']?>" data-efisica="<?php echo $row['efisica']?>" data-estatura="<?php echo $row['estatura']?>"data-peso="<?php echo $row['peso']?>" data-talla="<?php echo $row['talla']?>" data-temperatura="<?php echo $row['temperatura']?>" data-diagnostico="<?php echo $row['diagnostico']?>" data-patologiasa="<?php echo $row['patologiasa']?>" data-objtratamiento="<?php echo $row['objtratamiento']?>" data-electroestimulacion="<?php echo $row['electroestimulacion']?>" data-corrientee="<?php echo $row['corrientee']?>" data-modulacione="<?php echo $row['modulacione']?>" data-duracione="<?php echo $row['duracione']?>" data-ultrasonido="<?php echo $row['ultrasonido']?>" data-frecuenciau="<?php echo $row['frecuenciau']?>" data-potenciau="<?php echo $row['potenciau']?>" data-duracionu="<?php echo $row['duracionu']?>" data-laserinfrarojo="<?php echo $row['laserinfrarojo']?>" data-modalidadl="<?php echo $row['modalidadl']?>" data-duracionl="<?php echo $row['duracionl']?>" data-termoterapia="<?php echo $row['termoterapia']?>" data-modalidadt="<?php echo $row['modalidadt']?>" data-duraciont="<?php echo $row['duraciont']?>" data-ejercicio="<?php echo $row['ejercicio']?>" data-notaingreso="<?php echo $row['notaingreso']?>" data-notaalta="<?php echo $row['notaalta']?>" data-fecha="<?php echo $row['fecha']?>"><i class='glyphicon glyphicon-print'></i></button>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-ididentificacion="<?php echo $row['ididentificacion']?>"  data-ocupacion="<?php echo $row['ocupacion']?>" data-actividadfisica="<?php echo $row['actividadfisica']?>" data-deporte="<?php echo $row['deporte']?>" data-atraumaticos="<?php echo $row['atraumaticos']?>"  data-pactual="<?php echo $row['pactual']?>" data-efisica="<?php echo $row['efisica']?>" data-estatura="<?php echo $row['estatura']?>"data-peso="<?php echo $row['peso']?>" data-talla="<?php echo $row['talla']?>" data-temperatura="<?php echo $row['temperatura']?>" data-diagnostico="<?php echo $row['diagnostico']?>" data-patologiasa="<?php echo $row['patologiasa']?>" data-objtratamiento="<?php echo $row['objtratamiento']?>" data-electroestimulacion="<?php echo $row['electroestimulacion']?>" data-corrientee="<?php echo $row['corrientee']?>" data-modulacione="<?php echo $row['modulacione']?>" data-duracione="<?php echo $row['duracione']?>" data-ultrasonido="<?php echo $row['ultrasonido']?>" data-frecuenciau="<?php echo $row['frecuenciau']?>" data-potenciau="<?php echo $row['potenciau']?>" data-duracionu="<?php echo $row['duracionu']?>" data-laserinfrarojo="<?php echo $row['laserinfrarojo']?>" data-modalidadl="<?php echo $row['modalidadl']?>" data-duracionl="<?php echo $row['duracionl']?>" data-termoterapia="<?php echo $row['termoterapia']?>" data-modalidadt="<?php echo $row['modalidadt']?>" data-duraciont="<?php echo $row['duraciont']?>" data-ejercicio="<?php echo $row['ejercicio']?>" data-notaingreso="<?php echo $row['notaingreso']?>" data-notaalta="<?php echo $row['notaalta']?>" data-fecha="<?php echo $row['fecha']?>"><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-ididentificacion="<?php echo $row['ididentificacion']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegistrar" data-ididentificacion="<?php echo $row['ididentificacion']?>" data-diagnostico="<?php echo $row['diagnostico']?>"><i class='glyphicon glyphicon-duplicate'></i>Sesion</button>
						
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
