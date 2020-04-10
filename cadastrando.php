<?php

include 'connect.php';

   $nome = $_POST["nome"];
   $idade = $_POST["idade"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $senha = crypt($senha, "salt");

//echo $nome . "<br>" . $idade . "<br>" . $email . "<br>" . $senha;

$inserir = mysqli_query($conexao, "INSERT INTO tabela (nome, idade, email, senha) VALUES ('$nome', '$idade', '$email', '$senha')")or die(mysqli_error($conexao));

if($inserir) header ('location: login.php');
else echo "erro ao inserir";
