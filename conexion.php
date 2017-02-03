<?php
    global $con;
	
	function conectar(){  
        global $con;
		
		$host   = "localhost";
		$usr    = "";
		$pwd    = "hola12345";
		$db     = "2188359_juego";
		
		$con = mysqli_connect($host,$usr,$pwd,$db) or die("No se pudo conectar al servidor MySQL.");
	}

    function desconectar(){
        global $con;
        mysqli_close($con);
    }

    function ejecutar($qry){
        global $con;
        
        conectar();
        $res = mysqli_query($con, $qry) or die('Error en el query.'); // ejecución del query
        desconectar();
        
        return $res;
    }
?>


