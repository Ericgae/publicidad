<?php
include('../../connect_db.php');//CONEXION A LA BD



if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Fechas_Ingreso.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Id Alumno', 'Nombre', 'Carrera', 'Grupo', 'Fecha de Ingreso'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conexion->query("SELECT *  FROM persona where  ORDER BY idpersona");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['idpersona'], 
								$filaR['nombre'],
								$filaR['apellidop'],
								$filaR['apellidom'],
								$filaR['sexo']));

}

?>