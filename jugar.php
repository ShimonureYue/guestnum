<?php
$numinput = '';
$resultado = '';

function checkNumber($num_in , $num_me){
    //$num_in = $_POST['textarea'];
    //$num_me = '1234';

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

    //$resultado .= $final_result . "<br>";
	return $final_result;
}

if( isset($_POST['textarea']) ) {
    $resultado = checkNumber($_POST['textarea'], 1234);
}

?>