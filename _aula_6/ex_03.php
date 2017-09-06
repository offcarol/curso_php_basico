<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Variáveis Referenciadas</title>
    </head>
    <body> 
    	<div>
	    	<?php
				//$a = 3; //exemplo sem referência
				//$b = $a;
				//$b += 5;
				$a = 3; //exemplo com referência &
				$b = &$a;
				$b += 5;
				echo "A variável A vale $a.<br/>";
				echo "A variável B vale $b.";
	    	?>
    	</div>
    </body>
</html>