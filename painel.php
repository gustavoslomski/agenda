<?php
session_start();
if($_SESSION["acesso"]==""){
    header("location: login.php");
}
include 'header.php';
$success = "Cadastro Realizado com Sucesso!";

?>
<html>
<head>
	<title>PAINEL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		html{
			overflow-y: hidden;
		}
	</style>
</head>
<body>
	
	<div class=" b text-center bg-success">
	<?php	
		if(@$_GET["contato"] == 1){
		 echo $success;
		}
	?>
	</div>
	
	<div style="margin: 15%; background-color: #4287f5; border-radius: 2%;" >
		<h1 class="text-center text-light pt-2">Olá <?php echo $_SESSION["nome"]?></h1>
		<!-- <h1 class="text-center text-light pt-2">Olá <?php echo $_SESSION["nome"]; $_SESSION["id_tabela"];?>, voce realizou se cadastro com sucesso.</h1> -->
		<p class="lead text-center p-2">Seja Muito Bem Vindo a Nossa Pagina feita com PHP e HTML para a disciplina de WEB - Profº Dr Wellton</p>

		<!--	<a href="sair.php">Sair</a>
			<br>
			<a href="cadastroContato.php">Cadastrar Contato</a>
			<br>
			<a href="mostrarContato.php">Visualizar Contatos</a>
		-->
	</div>
	
</body>
</html>
