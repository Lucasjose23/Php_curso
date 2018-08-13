<?php
	// strtolower
	$nome="Gustavo Guanabara";
	print("seu nome é".strtolower($nome));//passa todas as letras pra minusculo

	//strtoupper
	$nome="lucas";
	print("seu nome é".strtoupper(´$nome));//maiuscula

	//ucfirst
	$nome="lucas jose";
	print("seu nome é".ucfirst(´$nome));//colocar a primeira em maiuscula

	//ucwords
	$nome="lucas jose";
	print("seu nome é".ucwords($nome));//primeira letra de cada palavra em maiusculoa

	//strrev
	$nome="gustavo";
	print(strrev($nome));//reverso

	//strpos
	$frase="estou aprendedo PHP"
	$POS=strpos($frase,"PHP");//ENCONTRA A STRING E RETORNA SUA POSIÇAO

	//stripos
	$frase="estou aprendedo PHP"
	$POS=stripos($frase,"php");//ignora se é maiuscula ou minuscula

	//substr_count
	$frase="estou aprendedo PHP";
	$cont=substr_count($frase,"PHP");//RETORNA QUANTAS VESES TEM PHP NA FRASE

	//substr
	$site="curso em video";
	$sub=substr($site,0,5);//cria um,a substring de $site que começa na posicao 0 e a quantidade de letra que ele vai pegar/andar 

	//str_pad
	$nome="guanabara";
	$novo=str_pad($nome,30," ",STR_PAD_RIGHT);//FAZ A STRING COLOCAR ESPAÇOS ATE DAR 30 LETRAS COMPREMENTADO A DIREITA(STR_PAD_RIGHT)
	
	//STR_REAPEAT
	$txt=str_repeat("php", 5);//cria uma string escrevendo php 5 veses;

	//str_replace
	$frase="vai toma no cum";
	$novafrase=str_replace("gay","cum",$frase);//coloca a palavra do primeiro parametro na palavra do segundo parametro
	


?>