<?php
//include('../conexion/con_b.php');
require_once('../../conexion.php');


$dato = $_POST['dato'];
//EJECUTAMOS LA CONSULTA DE BUSQUEDA
$consulta = mysql_query("SELECT * FROM persona WHERE nombre LIKE '%$dato%' ORDER BY idpersona ASC");

/*$this->query = "SELECT * FROM area WHERE ubicacion_anaquel LIKE '%$dato%' ORDER BY pk_area ASC ";

        $this->get_results_from_query();*/

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
echo '<table class="table table-striped table-condensed table-hover table-bordered">
<thead>
	<tr>
		<th>NOMBRE</th>
		<th>DOMICILIO</th>
		<th>TELEFONO</th>
		<th>WEB</th> 
		<th>Eliminar</th>
		<th>actualizar</th>
	</tr>
</thead>';
if(mysql_num_rows($consulta)>0){
	while($row = mysql_fetch_array($consulta)){
		echo "<tr>";

		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['apellidop']."</td>";
		echo "<td>".$row['apellidom']."</td>";
		echo "<td>".$row['correo']."</td>";
		
		echo "<td><a href=../paginas/eliminar_provedor.php?pk_proovedores=".$row['idpersona']." "; 
		?>onclick="return confirm('¿En verdad deseas eliminar este registro?','Confirma')" <?php echo"><span class='glyphicon glyphicon-trash'></span></a></td>"; 
echo "<td><a href=../paginas/eliminar_provedor.php?pk_proovedores=".$row['idpersona']." "; 
		?>onclick="return confirm('¿En verdad deseas eliminar este registro?','Confirma')" <?php echo"><span class='glyphicon glyphicon-refresh'></span></a></td>"; 
	}
}else{
	echo '<tr>
	<td colspan="5">No se encontraron resultados</td>
</tr>';
}
echo '</table>';
?>