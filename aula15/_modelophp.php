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
       function teste($x)//passagem por valor
   	   {
    		$x=$x+1;
    		echo "$x";
       }
       $a=5;
       teste($a);
       echo "<br/>$a";

       function teste2(&$x)//passagem por valor
   	   {
    		$x=$x+1;
    		echo "<br/>$x";
       }
       $b=5;
       teste2($b);
       echo "<br/>$b";

    ?>
    
</div>
</body>
</html>
 