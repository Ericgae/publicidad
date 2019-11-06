<?php
	//Incluimos librería y archivo de conexión
	require '../../Classes/PHPExcel.php';
	require '../../connect_db.php';

	//Consulta
	$sql = "SELECT * FROM persona INNER JOIN ficha_identificacion ON persona.idpersona=ficha_identificacion.fkpersona order by apellidop";
	$resultado = $con->query($sql);
	$fila = 7; //Establecemos en que fila inciara a imprimir los datos
	
	$gdImage = imagecreatefromjpeg('../../img/logo.jpg');//Logotipo
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("Clinica Salud y Bienestar")->setDescription("REPORTE DE FICHAS DE IDENTIFICACION");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("fichas de identificacion");
	
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
	$objPHPExcel->getActiveSheet()->getStyle('A6:AP6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('C3', 'REPORTE DE CITAS FICHAS DE IDENTIFICACION');
	$objPHPExcel->getActiveSheet()->mergeCells('C3:G3');
	
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
	$objPHPExcel->getActiveSheet()->setCellValue('K6', 'ID ');
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('L6', 'OCUPACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('M6', 'ACTIVIDAD FISICA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('N6', 'DEPORTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('O6', 'ANTECEDENTES TRAUMATICOS');
	$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('P6', 'PADECIMIENTO ACTUAL');
	$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('Q6', 'EXPLORACION FISICA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('R6', 'ESTATURA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('S6', 'PESO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('T6', 'TALLA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('U6', 'TEMPERATURA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('V6', 'DIAGNOSTICO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('W6', 'PATOLOGIAS ASOCIADAS');
	$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('X6', 'OBJETIVO TRATAMIENTO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('Y6', 'ELETRO ESTIMULACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('Z6', 'CORRIENTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AA6', 'MODULACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AB6', 'DURACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AC6', 'ULTRASONIDO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AD6', 'FRECUENCIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AE6', 'POTENCIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AF6', 'DURACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AG6', 'LASER INFRAROJO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AH6', 'MODALIDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AI6', 'DURACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AJ6', 'TERMOTERAPIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AK6', 'MODALIDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AL6', 'DURACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AM6', 'EJERCICIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AN6', 'NOTA DE INGRESO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AO6', 'NOTA DE ALTA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AP6', 'FECHA');
	
	
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
		$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['ididentificacion']);
		$objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['ocupacion']);
		$objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['actividadfisica']);
		$objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['deporte']);
		$objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['atraumaticos']);
		$objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $rows['pactual']);
		$objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $rows['efisica']);
		$objPHPExcel->getActiveSheet()->setCellValue('R'.$fila, $rows['estatura']);
		$objPHPExcel->getActiveSheet()->setCellValue('S'.$fila, $rows['peso']);
		$objPHPExcel->getActiveSheet()->setCellValue('T'.$fila, $rows['talla']);
		$objPHPExcel->getActiveSheet()->setCellValue('U'.$fila, $rows['temperatura']);
		$objPHPExcel->getActiveSheet()->setCellValue('V'.$fila, $rows['diagnostico']);
		$objPHPExcel->getActiveSheet()->setCellValue('W'.$fila, $rows['patologiasa']);
		$objPHPExcel->getActiveSheet()->setCellValue('X'.$fila, $rows['objtratamiento']);
		$objPHPExcel->getActiveSheet()->setCellValue('Y'.$fila, $rows['electroestimulacion']);
		$objPHPExcel->getActiveSheet()->setCellValue('Z'.$fila, $rows['corrientee']);
		$objPHPExcel->getActiveSheet()->setCellValue('AA'.$fila, $rows['modulacione']);
		$objPHPExcel->getActiveSheet()->setCellValue('AB'.$fila, $rows['duracione']);
		$objPHPExcel->getActiveSheet()->setCellValue('AC'.$fila, $rows['ultrasonido']);
		$objPHPExcel->getActiveSheet()->setCellValue('AD'.$fila, $rows['frecuenciau']);
		$objPHPExcel->getActiveSheet()->setCellValue('AE'.$fila, $rows['potenciau']);
		$objPHPExcel->getActiveSheet()->setCellValue('AF'.$fila, $rows['duracionu']);
		$objPHPExcel->getActiveSheet()->setCellValue('AG'.$fila, $rows['laserinfrarojo']);
		$objPHPExcel->getActiveSheet()->setCellValue('AH'.$fila, $rows['modalidadl']);
		$objPHPExcel->getActiveSheet()->setCellValue('AI'.$fila, $rows['duracionl']);
		$objPHPExcel->getActiveSheet()->setCellValue('AJ'.$fila, $rows['termoterapia']);
		$objPHPExcel->getActiveSheet()->setCellValue('AK'.$fila, $rows['modalidadt']);
		$objPHPExcel->getActiveSheet()->setCellValue('AL'.$fila, $rows['duraciont']);
		$objPHPExcel->getActiveSheet()->setCellValue('AM'.$fila, $rows['ejercicio']);
		$objPHPExcel->getActiveSheet()->setCellValue('AN'.$fila, $rows['notaingreso']);
		$objPHPExcel->getActiveSheet()->setCellValue('AO'.$fila, $rows['notaalta']);
		$objPHPExcel->getActiveSheet()->setCellValue('AP'.$fila, $rows['fecha']);
			
		
		
		$fila++; //Sumamos 1 para pasar a la siguiente fila
	}
	
	
	
	
	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="fichas de indentificacion.xlsx"');
	header('Cache-Control: max-age=0');
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save('php://output');
	
?>