<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operadores Aritméticos Simplificados</title>
    </head>
    <body> 
    	<div>
	    	<?php
				$atual = $_GET["aa"];
				echo "O ano atual é $atual e o ano anterior é " . --$atual . "."; //colocando antes, é mexido e após isso mostrado.
	    	?>
    	</div>
    </body>
</html>