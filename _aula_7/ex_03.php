<!-- Mostrar a situação de um aluno, de acordo com a sua média obtida -->

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operadores Relacionais - Situação</title>
    </head>
    <body> 
    	<div>
	    	<?php
				
				$nota1 = $_GET["n1"];
				$nota2 = $_GET["n2"];
				$m = ($nota1+$nota2)/2;
				echo "A média entre $nota1 e $nota2 é $m <br/>";
				//$sit = ($m<6) ? "REPROVADO" : "APROVADO";
				//echo "A situação do aluno é $sit."
				echo "A situação do aluno é " . (($m<6) ? "REPROVADO" : "APROVADO"); //concatenado
 	    	?>
    	</div>
    </body>
</html>