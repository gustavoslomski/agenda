<?php

//$conexao = new mysqli('localhost', 'smartlock', 'Sm@rtLock*8102db', 'smartlock');
$conexao = new mysqli('localhost', 'gustavo', 'slomski00', 'agenda');

  mysqli_set_charset($conexao, 'utf8');
  /*if ($conexao->connect_error){
      die("Falha ao realizar a conexão: " . $conexao->connect_error);
  }else{
    echo "Conectado";
  }*/

?>