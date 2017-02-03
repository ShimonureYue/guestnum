<?php
$numinput = '';
$resultado_fake;

if( isset($_POST['textarea']) ) {
    $numinput = $_POST['textarea'];
    echo $numinput."<br>";
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