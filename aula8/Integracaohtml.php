<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<?php
		$valor= $_GET["v"];
		$raiz=sqrt($valor);
		echo "O valor enviado foi $valor e a raiz é ".number_format($raiz,2);
	?>


</div>
<a href="integracao.html" ><p align="left">Voltar</p></a>

</body>
</html>