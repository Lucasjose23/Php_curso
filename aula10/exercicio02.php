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
    //CONDICOES DE MULTIPLOS CASOS
        $d=isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo"Aula";
                break;
            case 7:
            case 8:
                echo "final de semana";
                break;
                

            
            default:
                echo "nao´tem esse dia";
                break;
        }
      
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a><!--volte uma pagina no meu historico de navegaçao-->
</div>
</body>
</html>
 