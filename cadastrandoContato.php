<?php

  include "connect.php";
  session_start();

  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];
  $numero = $_POST["numero"];
  $bairro = $_POST["bairro"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $id_tabela = $_SESSION["id"];

  if(isset($_FILES['arquivo'])){
    $target_dir = "upload/";
    $name_for_bd = basename($_FILES["arquivo"]["name"]);
    $target_file = $target_dir . basename($_FILES["arquivo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  }
  if (file_exists($target_file)) {
      $valor = (rand(1,100) * rand(1,100)) ;
      $name_for_bd = $valor.$name_for_bd;
      $target_file = $target_dir . $name_for_bd;
  }

  move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file);


$sql_code = "INSERT INTO contato (nome, telefone, endereco, numero, bairro, cidade, estado, end_image, id_tabela)
  VALUES ('".$nome."', '".$telefone."', '".$endereco."' , '".$numero."' ,'".$bairro."', '".$cidade."', '".$estado."', '".$name_for_bd."', '".$id_tabela."')";

$inserir = mysqli_query($conexao,$sql_code);

if($inserir)
    header("location: painel.php?contato=1");

else
    echo "Não foi possível realizar o Cadastro!";

?>
