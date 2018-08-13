<?php
// vetorees no php sao dinamicos
	$n[0]=3;
	$n[1]=2;
	$n[2]=2;
	// outra manienra
	$n=array(3,5,8,2);
	$n[]=7;//cria uma posiçao no final do vetor

	//range
	$c=range(5,20,5);//numero inicial numero final e o passo

	//foreach
	$c=range(5,20,5);
	foreach ($c as $value) //para cada elemeto do vetor c tratado como valor
	{
		echo "$value";
	}

	//chaves personalizadas
	$v-array(1=>"A",3=>"B",6=>"C",8=>"D");//primeira powsiçao relacionada a A => assoiaçao
	unset($v[8]);//desaloca o vetor na posiçao 8

	//chaves associativas
	$cad=array("nome" => "ana","idade"=>"23","peso"=>78.5 );//tipo uma classe
	foreach ($cad as $campo => $value)//onde campo éo indice e valor e o valor que esta naquele indice 
	{
		echo "$campo=$valor";
	}


	//matrizes
	$n=array(array(2,3),array(3,4),array(9,5));//vetores de vetores
	$n[2][0]=5;



?>