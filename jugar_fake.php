<?php 


$resultado_fake = array(
	"resultado" => "Probando",
	"input" => 1345,
	"patron" => "XX--",
	"stack" => array(
		array(
			"input" => 1466
			"patron" => "X-"
		),
		array(
			"input" => 9867
			"patron" => "X"
		),
	), 

);

header('Content-Type: application/json');
echo json_encode($resultado_fake);

?>