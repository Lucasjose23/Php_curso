<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
    	$n=isset($_GET["num"])?$_GET["num"]:1;
    	$c=1;
    	for ($i=2; $i<$n  ; $i++) 
    	{ 
    		if(($n%$i)==0)
    		{
    			echo "$n é divisivel por $i<br/>";
    			$c++;

    		}
    	

    	}
    	if ($c!=1) 
    	{
    		echo "$n nao é primo";
    	}
    	else
    	{
    		echo "$n é primo";
    	}
   
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 