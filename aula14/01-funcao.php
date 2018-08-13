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
        function soma($a,$b)//funçao normal sem retorno de parametro
        {
        	$s=$a+$b;
        	echo " <p>a soma vale $s</p>";
        }
        $s=4;
        $b=3;
        soma($s,$b);
        function soma2($a,$b)//retorna
        {
        	$s=$a+$b;
        	return $s;//ou return $a+$b
        }
        $r=soma2(5,89);
        echo "a soma entre 5 e 89 é $r<br/>";
        //rotinas com multiplos parametros
        function soma3()
        {
        	$p=func_get_args();//pega todos os paramentros e coloca em p como um vetor
        	$t=func_num_args();//retorna o numero (quantidade de parametros) passado;
        	$s=0;
        	for ($i=0; $i<=$t; $i++) 
        	{ 
        		$s+=$p[$i];
        	}
        	return $s;
        }
        $m=soma3(8,5,6);
        echo "soma multipla $m";


    ?>
</div>
</body>
</html>
 