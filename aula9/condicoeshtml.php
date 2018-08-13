<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<?php
		$a=isset($_GET["ano"])?$_GET["ano"]:1996;
		$i=date("Y")-$a;
		echo "Voce tem $i anos";
		if($i>=16)
		{
			if($i>=16 && $i<18)
			{

				$v="ja pode votar se quizer";
				$d="ja pode dirigir nos eua";

			}
			else
			{
				$v="ja pode votar";
				$d="ja pode dirigir";

			}
			
		}
		else//em php tambem tem um ELSEIF
		{
			$v="nao pode votar";
			$d="nao pode diigir";
		}
		echo "<br/>Com esta idade voce $v e tambem $d";

	?>
</div>

</body>
</html>