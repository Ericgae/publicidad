<?php
	//Incluimos librería y archivo de conexión
	require '../../Classes/PHPExcel.php';
	require '../../connect_db.php';

	//Consulta
	$sql = "SELECT idpersona, nombre, apellidop, apellidom, sexo, edad, fechanac, correo, telefonofijo, celular, iddireccion, calle, numero, estado, municipio, localidad, cpostal FROM persona INNER JOIN direccion ON persona.idpersona=direccion.fkpersona  order by apellidop";
	$resultado = $con->query($sql);
	$fila = 7; //Establecemos en que fila inciara a imprimir los datos
	
	$gdImage = imagecreatefromjpeg('../../img/logo.jpg');//Logotipo
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("Clinica Salud y Bienestar")->setDescription("Reporte de Pacientes");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Pacientes");
	
	$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
	$objDrawing->setName('Logotipo');
	$objDrawing->setDescription('Logotipo');
	$objDrawing->setImageResource($gdImage);
	$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
	$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
	$objDrawing->setHeight(100);
	$objDrawing->setCoordinates('A1');
	$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>15
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));
	
	$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A6:Q6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PACIENTES');
	$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'ID');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('B6', 'APELLIDO PATERNO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('C6', 'APELLIDO MATERNO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('D6', 'NOMBRE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('E6', 'SEXO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('F6', 'EDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('G6', 'FECHA DE NACIMIENTO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('H6', 'CORREO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('I6', 'TELEFONO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('J6', 'CELULAR');
	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('K6', 'ID DIRECCION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('L6', 'CALLE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('M6', 'NUMERO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('N6', 'ESTADO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('O6', 'MINUCIPIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('P6', 'LOCALIDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('Q6', 'CODIGO POSTAL');
	
	
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['idpersona']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['apellidop']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['apellidom']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['nombre']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['sexo']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['edad']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fechanac']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['correo']);
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['telefonofijo']);
		$objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['celular']);
		$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['iddireccion']);
		$objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['calle']);
		$objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['numero']);
		$objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['estado']);
		$objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['municipio']);
		$objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $rows['localidad']);
		$objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $rows['cpostal']);	
		
		$fila++; //Sumamos 1 para pasar a la siguiente fila
	}
	
	
	
	
	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Pacientes.xlsx"');
	header('Cache-Control: max-age=0');
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save('php://output');
	
?>