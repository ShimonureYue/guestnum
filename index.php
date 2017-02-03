<?php
session_start();

include "jugar.php";
?>

<!DOCTYPE html>

<?php
    if(isset($_SESSION['contador'])) {
        $_SESSION['contador']++;    // incremento el contador
        //echo "Sesion iniciada.<br>";
        //echo "Cantidad de veces que entraste: " . $_SESSION['contador'];
    } else {
        $_SESSION['contador'] = 1;    // inicio el contador
		// echo "Hola, esta es tu primera vez<br>";
        //echo "Presiona la tecla F5 para refrezcar esta pagina";
    }
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Guess Num</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
    <div id="form-main">
        <div id="form-div"> 
            <form class="form" id="form1" method="POST" action="index.php">
                <center>
					<?php echo "Contador: " . $_SESSION['contador']; ?>
				<br/>
				<?php echo $resultado["mensaje"]; ?>
				<br/>
				<?php echo $resultado["patron"]; ?>
				
                    <p class="textarea">
                        <input name="textarea" type="number" class="validate[required,custom[onlyLetter],length[0,4]] feedback-input" placeholder="Número" id="textarea" maxlength="4" required="required" min="0" step="1" style="width:70%;height:30px;" />
                    </p>

                   <div class="submit">
                        <input type="submit" value="Enviar" id="button-blue"/>
                    </div>
                    
                    <p class="text">
                    <br/>
						<textarea name="text" id="comment" style="width:400px;height:400px" placeholder="Resultado">
                        </textarea>
					  </p>	
					  
                </center>
            </form>
        </div>
</body>
</html>