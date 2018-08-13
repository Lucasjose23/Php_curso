<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<?php
		$nome=isset($_GET["nome"])?$_GET["nome"]:"[nao Informado]";//se foi passado por Parametro(isset)
		$ano=isset($_GET["nome"])?$_GET["ano"]:"[nao informado]";
		$sexo=isset($_GET["nome"])?$_GET["sexo"]:"[nao informado]";
		$idade=date("Y")-$ano;
		echo"$nome é $sexo tem $idade anos";
	?>


</div>
<a href="integracao2.html" ><p align="left">Voltar</p></a>

</body>
</html>