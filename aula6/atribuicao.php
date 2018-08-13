<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
<?php
	/*$b=1;
	$b+=1;
	$b++;
	$a=2;
	$a*=$b;
	$a.=$b;//concatenação
	*/
	 $preco=$_GET["p"];
	 echo "O preço do produto é R$ ".number_format($preco,2);
	 $preco+=($preco*10/100);
	 echo "</br> o novo preço com 10 por cento é R$ ".number_format($preco,2);
	 $preco-=($preco*10/100);
	 echo "</br> o novo preço com 10 por cento de desconto é R$ ".number_format($preco,2);
	 /*inclementos*/
	 //pre inclemmento ++$a
	 //pos inclemento $a++
	 //pre declemento --$a
	 // pos decremento $a--
	 $atual=$_GET["aa"];
	 echo "</br>atual é $atual e o anterior é ".--$atual;//pre decremento se usar o pos da erro
	 /*referencias entre variaveis*/
	$a=3;
	$b=$a;
	$b+=5;
	echo "</br>$a";
	echo "</br>$b";
	//por referencia
	$c=3;
	$d=&$c;//ponteiro para a
	$d+=5;
	echo "</br>$c";
	echo "</br>$d";
	/*variaveis de variaveis= criar variaveis apartir de outras variaveis*/
	$site="cursoemvideo";
	$$site="cursoPHP";//VARIAVEIS VARIANTES..ESSA VARIAVEL VAI CHAMAR O O CONTEUDO DA PRIMEIRA
	echo "</br>$site";
	echo "</br>$cursoemvideo";







?>
</div>

</body>
</html>