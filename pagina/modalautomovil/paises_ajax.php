<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){

		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM automovil ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listaauto.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT *  FROM automovil, persona, cliente WHERE persona.idpersona=cliente.fkPersona AND cliente.idcliente=automovil.fkCliente order by idpersona");
		
		if ($numrows>0){
			?>
				<script>
    $(document).ready(function () {
        $('#grid').DataTable();
    });
    
  </script>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
   
		<table id="grid" class="table table-bordered">
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>CLiente</th>
				  <th>marca</th>
				   <th>modelo</th>
				  <th>color</th>
				   <th>placas</th>
				  <th>rodado</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['idpersona'];?></td>
					<td><?php echo $row['apeliidoP']." ".$row['apellidoM']." ".$row['nombre'];?></td>
					<td><?php echo $row['marca'];?></td>
					<td><?php echo $row['modelo'];?></td>
					<td><?php echo $row['color'];?></td>
					<td><?php echo $row['placas'];?></td>
					<td><?php echo $row['rodado'];?></td>
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idauto="<?php echo $row['idauto']?>"  data-marca="<?php echo $row['marca']?>" data-modelo="<?php echo $row['modelo']?>" data-color="<?php echo $row['color']?>" data-placas="<?php echo $row['placas']?>" data-rodado="<?php echo $row['rodado']?>" ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idauto="<?php echo $row['idauto']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
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
