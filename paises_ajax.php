<?php


	# conectare la base de datos
     include ('connect_db.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM articulo ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		
		$reload = 'listaarticulo.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT *  FROM articulo, tipo, almacen  WHERE tipo.idtipo=articulo.fkTipo AND almacen.idalmacen=articulo.fkAlmacen AND cantidad > 0   order by idarticulo ");
		
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
			<div class="col-md-6">
		<table id="grid" class="table table-bordered" >
			  <thead>
				<tr>
				 
				  <th>Imagen</th>
				  <th>Rodado</th>
				  <th>Codigo</th>
				  <th>Marca</th>
				  
				  <th>Tipo</th>
				  <th>Descripcion</th>
				  
				 
				 
				 
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					
					<td>
					<a class="fancybox" rel="gallery1" href="<?php echo "articulos"; echo $row['foto']; ?>" title="<?php echo $row['codigo']."  ".$row['descripcion'];?>">
					<img src= <?php echo "articulos"; echo $row['foto']; ?> id="foto" name="foto" width ="100" height = "100">
				</td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['codigo'];?></td>
					<td><?php echo $row['marca'];?></td>
					
					<td><?php echo $row['tipo'];?></td>
					<td><?php echo $row['descripcion'];?></td>
				
				
					
					
					
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
