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
       
		//$prod="leite";
		//$preco=4.5;
		//printf("O %s tem preço de R$ %.2f",$prod,$preco);
		//$x[0]=4;
		//$x[1]=1;
		//print_r($x);
    	//$txt="este sou eu um cara legal";
		//$res=wordwrap($txt,8,"<br/>\n",false);
		//echo "$res";
		//$nome="  Jose da Silva  ";//x sao espaços
		//$novo=trim($nome);
		//echo "$novo";
    	//$frase="eu vou estudar php";
		//$count=str_word_count($frase,0);
		//echo "$count";
		//$site="CURSO EM VUUDEO";
		//$vetor=explode(" ", $site);
		//print_r($vetor);
    	$vetor[0]="curso";
		$vetor[1]="em";
		$vetor[2]="video";
		$texto=implode(" ", $vetor);
		echo "$texto";



    ?>
</div>
</body>
</html>
 