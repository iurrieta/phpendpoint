<?php

// get JSON
$formData = isset($_POST['formData']) ? $_POST['formData'] : false;

if ($formData) {

	// values for the operation
	$val1 	= $formData['val1'];
	$val2 	= $formData['val2'];
	$result = 0;

	switch ($formData['operation']) {
		case 'sum':
			$result = $val1 + $val2;
			break;
		case 'subtraction':
			$result = $val1 - $val2;
			break;
		case 'multiplication':
			$result = $val1 * $val2;
			break;
		
		default:
			$result = $val2 == 0 ? "Error division by zero" : $val1 / $val2;
			break;
	}

	// ouput result
	echo json_encode([
		'status' => 'OK',
		'result' => $result
	]);
}
else {
	echo json_encode([
		'status' => 'error',
		'result' => "Ups! an error occured, please try again."
	]);
}

?>