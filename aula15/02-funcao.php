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
      include "funcoes.php";//incluindo outros arquivos existe tbm o (require) ele exije que o documento exista senao ele para o sistema, usando o include se o documento nao existir ele continua o programa
      //include_once se este doncumento ja esta incluido ele nao inclui denovo
      //require_once tbm
      echo "<h1>testando</h1><br/>";
      ola();
      mostravalor(4);

    ?>
    
</div>
</body>
</html>
 