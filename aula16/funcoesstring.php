<?php
	//printf
	$prod="leite";
	$preco=4.5;
	printf("O %s tem preço de %f",);//formata igual a linguagem c

	//print_r
	$x[0]=4;
	$x[1]=1;
	$y=array(3,5,6);
	print_r($x);//mostra todos os detalhes da variavel nesse caso todos os dados do vetor

	//var_dump() var_export faz a msm coisa

	//wordwrap
	$txt="este sou eu um cara legal";
	$res=wordwrap($txt,"<br>\n",false);//faz a quebra de linha NO CODIGO de acordo com a quantidade de caracteres que vc passar, onde o primeiro parametro é a string o segundo e o numero de caracteres onde vc quer quebrar o terceiro parametro e se v quer quebrar na tela do usuario e no codigo(\n)  e o ultimo false(nao quebra palavra)true(quebra)
	echo "$res";

	//strlen
	$txt="cursos";
	$tamanho=strlen($txt);//retorna o tamanho da string

	//trim
	$nome="  Jose  da  Silva  ";//x sao espaços
	$novo=trim($nome);//recorta os espaços do começo e fim
	echo "$novo";

	//ltrim
	$nome="  Jose  da  Silva  ";//x sao espaços
	$novo=lrim($nome);//recorta os espaços do inicio
	echo "$novo";

	//rtrim so mente os do final

	//str_word_count
	$frase="eu vou estudar php";
	$count=str_word_count($frase,0);//retorna o numero de palavras,0 conta as palavras,1 cria um vetor com as palavras,jera um vetor so que com indices das posiçoes da string

	//explode
	$site="CURSO EM VUUDEO";
	$vetor=explode(" ", $site);//quebra a string em um array onde o primeiro parametro é o delimitador(caractere de separação)

	//str_split
	$nome="maria";
	$vetor=str_split($nome);//cada letras em um indice de vetor
	print_r($vetor);

	//implode
	$vetor[0]="curso";
	$vetor[1]="em";
	$vetor[2]="video";
	$texto=implode(" ", $vetor);//transforma o vetor em uma string onde o primeiro parametro e o delimitador //join faz a msm coisa

	//chr
	$letras=chr(67);//codigo da tabela asc
	echo"$letra";

	//ord contrario de chr 
	$letra="c";
	$c=ord($letra);







?>