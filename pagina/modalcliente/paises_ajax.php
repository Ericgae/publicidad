<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM persona ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listacliente.php';
		//consulta principal para recuperar los datos

		//$tipo =strval($_POST ['tipo']); 
		$query = mysqli_query($con,"SELECT * FROM persona, cliente where persona.idpersona=cliente.fkPersona  order by idcliente ");
		
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
				  <th>Nombre(s)</th>
				   <th>APELLIDO (S)</th>
				  <th> TIPO DE CLIENTE</th>
				   <th>TEL</th>
				   <th>Se Entero</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idcliente'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['apeliidoP']." ".$row['apellidoM'];?></td>
					<td><?php echo $row['tipoc'];?></td>
					<td><?php echo $row['tel'];?></td>
					<td><?php echo $row['supo'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idpersona="<?php echo $row['idpersona']?>"  data-nombre="<?php echo $row['nombre']?>" data-apellidop="<?php echo $row['apeliidoP']?>" data-apellidom="<?php echo $row['apellidoM']?>" data-tipoc="<?php echo $row['tipoc']?>"  data-tel="<?php echo $row['tel']?>" data-supo="<?php echo $row['supo']?>"  ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idpersona="<?php echo $row['idpersona']?>"  ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegistrar" data-idcliente="<?php echo $row['idcliente']?>" data-nombre="<?php echo $row['nombre']?>" data-apellidop="<?php echo $row['apellidop']?>"><i class='glyphicon glyphicon-duplicate'></i></button>
					
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
