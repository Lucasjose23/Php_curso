<!DOCTYPE html>
<html>
<head>
	<?php
		$nome=isset($_GET["nome"])?$_GET["nome"]:"nao Informado";//se foi passado por Parametro(isset)
		$tam="14pt";
		$cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
		
	?>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<style type="text/css">
		span.texto {
			font-size: <?php echo $tam;?>;/*chamando a variavel php*/
			color: <?php echo $cor;?>;
		}
	</style>
</head>
<body>
<div>
	<?php
		echo "<span class='texto'>$nome</span>";
	?>


</div>
<a href="integracao3.html" ><p align="left">Voltar</p></a>

</body>
</html>