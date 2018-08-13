<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<?php
		$v1=$_GET["a"];
		$v2=$_GET["b"];
		echo"o abs de $v2 é".abs($v2)."</br>";
		echo"o valor de $v1 elevado a $v2 ".pow($v1,$v2);
		echo "</br>a raiz de $v1 é".sqrt($v1);
		echo "</br>a arredondado de $v2 é".round($v2);//ceil pra cima e floor pra baixo
		echo "</br>a pate intera de $v2 é".intval($v2);
		echo "</br>o valor de $v1 em moeda é R$".number_format($v1,2,",",".");//segundo parametro e o numero de casas decimais e o terceiro é o separador

	?>
</div>

</body>
</html>