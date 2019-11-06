<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM empresa ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listaempresa.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT *  FROM empresa, almacen, direccion WHERE empresa.idempresa=almacen.fkempresa AND empresa.idempresa=direccion.fkempresa  order by idempresa ");
		
		if ($numrows>0){
			?>
		<script>
    $(document).ready(function () {
        $('#grid').DataTable();
    });
    
  </script>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
    
			<div>
		<table id="grid" class="table table-bordered" >
			  <thead>
				<tr>
				  <th>Empresa</th>
				  <th>Nombre</th>
				  <th>Propietario</th>
				    <th>Calle</th>
				  <th>Colonia</th>
				  <th>Numero</th>
				  <th>telefono</th>
				 
				  <th>Nombre Almacen</th>
				  <th>Direccion Almacen</th>
				
				
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idempresa'];?></td>
					<td><?php echo $row['nombree'];?></td>
					<td><?php echo $row['propietarioe'];?></td>
						<td><?php echo $row['calle'];?></td>
					<td><?php echo $row['colonia'];?></td>
					<td><?php echo $row['numero'];?></td>
					<td><?php echo $row['tel'];?></td>
					
					<td><?php echo $row['nombrea'];?></td>
					<td><?php echo $row['direcciona'];?></td>
					
				

					
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idempresa="<?php echo $row['idempresa']?>"  data-nombree="<?php echo $row['nombree']?>" data-propietarioe="<?php echo $row['propietarioe']?>" data-iddireccion="<?php echo $row['iddireccion']?>" data-fkempresa="<?php echo $row['fkempresa']?>" data-calle="<?php echo $row['calle']?>" data-colonia="<?php echo $row['colonia']?>" data-numero="<?php echo $row['numero']?>" data-tel="<?php echo $row['tel']?>" data-correo="<?php echo $row['correo']?>" data-idalmacen="<?php echo $row['idalmacen']?>" data-fkempresa="<?php echo $row['fkempresa']?>" data-nombrea="<?php echo $row['nombrea']?>" data-direcciona="<?php echo $row['direcciona']?>"  ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idempresa="<?php echo $row['idempresa']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
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
