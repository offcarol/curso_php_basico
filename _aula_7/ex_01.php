<!--Permitir que o usuário escolha entre somar e multiplicar
dois números.-->

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operadores Relacionais</title>
    </head>
    <body> 
    	<div>
	    	<?php
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$tipo = $_GET["op"];
				echo "Os valores foram $n1 e $n2 <br/>";
				$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
				echo "O resultado será $r.";
				
	    	?>
    	</div>
    </body>
</html>