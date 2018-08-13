<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>

    <?php
        $num=isset($_GET["num"])?$_GET["num"]:1;
        $c=1;
        do
        {
          echo "$c * $num=".($c*$num)."</br> ";
          $c++;

          
        } while ( $c<= 10);
 
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a><!--volta uma pagina antes-->
</div>
</body>
</html>
 