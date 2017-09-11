<!--Permitir que o usuário escolha entre somar e multiplicar
dois números.-->

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operadores Relacionais - Igual e Idêntico</title>
    </head>
    <body> 
    	<div>
	    	<?php
				$a = 3;
				$b = "3";
				//$r = ($a == $b) ? "SIM" : "NÃO"; //igual
				$r = ($a === $b) ? "SIM" : "NÃO"; // identico
				echo "As variáveis A e B são iguais? $r";
				
	    	?>
    	</div>
    </body>
</html>