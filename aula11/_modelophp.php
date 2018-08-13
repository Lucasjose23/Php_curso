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
    	$c=1;
    	while($c<=10)
    	{
        $min=$_GET["min"];
        $max=$_GET["max"];
        $passo=$_GET["pass"];
        while ( $min<= $max) 
        {
          echo "$min<br/>";
          $min++;
        }
    	}
        
    ?>
</div>
</body>
</html>
 