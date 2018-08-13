<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		$i=1;
		while ($i<=10) 
		{
			$v="num".$i;
			$url="v".$i;
			$$v=isset($_GET[$url])?$_GET[$url]:0;
			$i++;

		}
		$i=1;
		while ($i <= 10) {//$num1 $num2 $num3 $num4
			# code...
			$v="num".$i;
			echo "valor $i:".$$v."<br/>";
			$i++;
		}

	?>

</div>
</body>
</html>
 