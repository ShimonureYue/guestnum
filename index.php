<?php
$numinput = '';
$resultado_fake;

function checkNumber($num_in , $num_me){
	$numero = (string)$num_in;
	$numero_interno = (string) $num_me;
	
	$numeros_input  = str_split ($numero,1);
	$numeros_interno = str_split ($numero_interno,1);

	//Verificando aparicion
	$str_look="";
	for ($i = 0;$i<4;$i++){//Recorremos todas las posiciones 
		$clave = array_search($numeros_input[$i], $numeros_interno); //Busca dentro de un array un string dado
		
		if($clave !== false){ //Si aparece en algun momento cocateno la salida
			$str_look.="X";
		}
	}

	//Verifica posicion
	$str_position="";
	for ($i = 0;$i<4;$i++){
		if( $numeros_interno[$i] == $numeros_input[$i])
			$str_position .= "-";
	}

	//Excluimos la condicion de ganada
	if($str_look == "XXXX" && $str_position == "----"){
		$final_result = $str_position;
	}else{
		$final_result = $str_look.$str_position;
	}
	return $final_result;
}

if( isset($_POST['textarea']) ) {
    $numinput = $_POST['textarea'];
    checkNumber($numinput, 1234);
}

function respuesta() {
    $resultado_fake = array(
	"resultado" => "Probando",
	"input" => 1345,
	"patron" => "XX--",
	"stack" => array(
		array(
			"input" => 1466,
			"patron" => "X-"
		),
		array(
			"input" => 9867,
			"patron" => "X"
		),
	  ), 
    );

    header('Content-Type: application/json');
    echo json_encode($resultado_fake);
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Guess Number</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
    <div id="form-main">
        <div id="form-div"> 
            <form class="form" id="form1" method="POST" action="index.php">
                <center>
                    <p class="textarea">
                        <input name="textarea" type="number" class="validate[required,custom[onlyLetter],length[0,4]] feedback-input" placeholder="Número" id="textarea" maxlength="4" required="required" min="0" step="1" style="width:70%;height:30px;" />
                    </p>

                    <div class="submit">
                        <input type="submit" value="Enviar" id="button-blue" />
                    </div>
                </center>
            </form>
            
        </div>
</body>
</html>