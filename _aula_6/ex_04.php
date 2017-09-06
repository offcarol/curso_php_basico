<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Variáveis de Variáveis</title>
    </head>
    <body> 
    	<div>
	    	<?php
				$x = "abc";
				$$x = "def";
				echo "O conteúdo da variável X é $x.";
				echo "<br/>A variável ABC recebeu o valor $abc."
	    	?>
    	</div>
    </body>
</html>