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
       
		//$nome="Gustavo Guanabara";
		//print("seu nome é".strtolower($nome));
   		 //$nome="lucas jose";
		 //print("seu nome é ".ucfirst($nome));
    	//$nome="gustavo";
		//print(strrev($nome));
    	//$frase="estou aprendedo PHP";
		//$pos=stripos($frase,"php");
		//echo "$pos";
    	//$site="curso em video";
		//$sub=substr($site,0,5);
		//echo "$sub";
    	$frase="vai toma no cum";
		$novafrase=str_replace("gay","cum",$frase);
		echo "$novafrase";

    ?>
</div>
</body>
</html>
 