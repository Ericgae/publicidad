<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		//las variables de paginación
		
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM sobrepedido ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM sobrepedido, provedor,persona ,cliente where persona.idpersona=cliente.fkpersona AND cliente.idCliente= sobrepedido.fkCliente AND provedor.idprovedor=sobrepedido.fkProvedor  order by idpedido ");
		
		if ($numrows>0){
			?>
				<script>
    $(document).ready(function () {
        $('#grid').DataTable();
    });
    
  </script>
			<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
    
			<div>
		<table id="grid" class="table table-bordered" >
  <thead>
				<tr>
				  <th>iD</th>
				  <th>cliente</th>
				   <th>provedor</th>
				    <th>fecha</th>
				     <th>Producto</th>
				       <th>Precio</th>
				      <th>cantidad</th>
				        <th>anticipo</th>
				         <th>Resto a pagar</th>
				         <th>status</th>


				 
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idpedido'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['nombreP'];?></td>
					<td><?php echo $row['fecha'];?></td>
					<td><?php echo $row['producto'];?></td>
					<td><?php echo $row['precio'];?></td>
					<td><?php echo $row['cantidad'];?></td>
					<td><?php echo $row['anticipo'];?></td>
					<td><?php echo $row['total'];?></td>
					<td><?php echo $row['status'];?></td>
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idpedido="<?php echo $row['idpedido']?>"  data-nombre="<?php echo $row['nombre']?>" data-nombreP="<?php echo $row['nombreP']?>" data-fecha="<?php echo $row['fecha']?>" data-producto="<?php echo $row['producto']?>" data-precio="<?php echo $row['precio']?>" data-cantidad="<?php echo $row['cantidad']?>"data-anticipo="<?php echo $row['anticipo']?>"data-total="<?php echo $row['total']?>"data-status="<?php echo $row['status']?>"><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idpedido="<?php echo $row['idpedido']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
						
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
		
			<?php
			
		} else {
			?>
			<?php
		}
	}
?>
