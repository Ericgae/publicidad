<?php


	# conectare la base de datos
     include ('../../connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM articulo ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listaarticulo.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * from articulo LEFT JOIN promocion ON promocion.fkArticulo=articulo.idarticulo LEFT JOIN tipo ON tipo.idtipo=articulo.fkTipo LEFT JOIN almacen on almacen.idalmacen=articulo.fkAlmacen order by idarticulo desc ");
		
		if ($numrows>0){
			?>
					<script>
    $(document).ready(function () {
        $('#grid').DataTable();
    });
    


  </script>

<!-- Add mousewheel plugin (this is optional) -->


  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
    <?php include("fancy.html"); ?>
			<div <div class="col-md-12">
		<table id="grid" class="table table-bordered" >
			  <thead>
				<tr>
				  <th>iD</th>
				  <th>foto</th>
				  <th>Nombre</th>
				  
				  <th>Codigo</th>
				  <th>Marca</th>
				  <th>Precio</th>
				  <th>Descripcion</th>	 
				  <th>Cantidad</th>
				  
				  <th>Almacen</th>
				  <th>Direccion</th>
				  <th>Promocion</th>
				   <th>fecha limite</th>
				 <th>Acciones</th>
				 <th>imagen</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				$id=$row['idarticulo'];
				?>
				<tr>
					<td><?php echo $row['idarticulo'];?></td>
					<td>
					<a class="fancybox" rel="gallery1" href="<?php echo $row['foto']; ?>" title="<?php echo $row['codigo']."  ".$row['descripcion'];?>">
					<img src="<?php echo "../articulos/"; echo $row['foto'];?>" id="foto" name="foto" width ="100" height = "100">
				</td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['codigo'];?></td>
					<td><?php echo $row['marca'];?></td>
					<td><?php echo $row['punitario'];?></td>
					<td><?php echo $row['descripcion'];?></td>
					<td><?php echo $row['cantidad'];?></td>
					
					<td><?php echo $row['nombrea'];?></td>
					<td><?php echo $row['direcciona'];?></td>
					<td><?php echo $row['estatus'];?></td>
					<td><?php  echo $row['fechaInicio'];echo "- hasta ";echo $row['fechaFin'];?></td>
					
				
					
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-idarticulo="<?php echo $row['idarticulo']?>"  data-nombre="<?php echo $row['nombre']?>" data-codigo="<?php echo $row['codigo']?>" data-marca="<?php echo $row['marca']?>" data-foto="<?php echo $row['foto']?>" data-punitario="<?php echo $row['punitario']?>" data-punitariod="<?php echo $row['punitariod']?>" data-punitariot="<?php echo $row['punitariot']?>"   data-descripcion="<?php echo $row['descripcion']?>" data-cantidad="<?php echo $row['cantidad']?>" ><i class='glyphicon glyphicon-edit'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-idarticulo="<?php echo $row['idarticulo']?>"  ><i class='glyphicon glyphicon-trash'></i></button>
						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataPromo" data-idarticulo="<?php echo $row['idarticulo']?>" ><i class="glyphicon glyphicon-tags"></i></button>
						<?php echo "<td><a href=update.php?idarticulo=".$row['idarticulo']." "; 
                    ?>onclick="return confirm('¿En verdad deseas actualizar la imagen este registro?','Confirma')" <?php echo"><span class='glyphicon glyphicon-picture'></span></a></td>"?>; 
                    
									
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
   			
			
		</table>
		</div>
		
			<?php
			
		
		}
	}
?>
