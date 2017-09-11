<!-- Mostrar se um eleitor é obrigada a votar ou não. -->

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operadores Relacionais - Eleições</title>
    </head>
    <body> 
    	<div>
	    	<?php
				
				$ano = $_GET["an"];
				$idade = 2017 - $ano;
				echo "Quem nasceu em $ano tem idade de $idade anos.";
				$tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO.";
				echo "E dessa forma o seu voto é $tipo.";
				
 	    	?>
    	</div>
    </body>
</html>