<?php

header('Content-Type: application/json');

// Set up the ORM library
require_once('setup.php');

if (isset($_GET['start']) AND isset($_GET['end'])) {
	
	$start = $_GET['start'];
	$end = $_GET['end'];
	$data = array();

	// Select the results with Idiorm
	$results = ORM::for_table('bitacora')
			->where_gte('fechab', $start)
			->where_lte('fechab', $end)
			->order_by_desc('fechab')
			->find_array();


	// Build a new array with the data
	foreach ($results as $key => $value) {
		$data[$key]['label'] = $value['fechab'];
		$data[$key]['value'] = $value['costo'];
	}

	echo json_encode($data);
}
