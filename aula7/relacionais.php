<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<?php
		//relacionais
		/*> < >= <= diferente(<> !=) igual(==) identico(=== para testar se sao do mesmo tipo e iqual)*/
		//operador ternario(expressão?verdadeiro:falso)
		//$maior=$a>$b?$a:$b;
		$n1=$_GET["a"];
		$n2=$_GET["b"];
		$tipo=$_GET["op"];//s para soma m pra mult
		echo"$n1 $tipo $n2";
		$r=($tipo=="s")?$n1+$n2:$n1*$n2;
		echo "</br>resultado $r";
		//exemplo de igual e identico
		$a=3;
		$b="3";
		$res=($a==$b)?"sim":"nao";
		echo "</br> a é iqual a b= $res";
		$res=($a===$b)?"sim":"nao";
		echo "</br> a é identico a b= $res";
		//exemplo notas
		$nota1=$_GET["n1"];
		$nota2=$_GET["n2"];
		$m=($nota1+$nota2)/2;
		echo "</br>Media do aluno é $m";
		$sit=($m>6)?"aprovado":"reprovado";
		echo "</br>$sit";
		echo "</br>A situaçao ".(($m>6)?"aprovado":"reprovado");
		//operadoes logicos
		//and ou &&,or ou ||,ou excluxivo xor ,nao e !
		$ano=1920;
		$idade=2017-$ano;
		echo"</br>Idade=$idade";
		$tipo=($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
		echo"</br>$tipo";










	?>
</div>

</body>
</html>