<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="segundaparte.php">
        <?php
            $c=1;
            while ( $c<= 10) 
            {
              echo "   valor $c:<input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
              $c++;
            }
        ?>
         
        <input type="submit" value="Enviar" class="botao"/>

      
    </form>

 

   
    

</div>
</body>
</html>
 