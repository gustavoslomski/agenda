<?php

  include "connect.php";
  session_start();
  $id = $_SESSION["id"];
if($id=="") header("location: login.php");

  $sql = "select * from contato where id_tabela = '".$id."'";
  $result = mysqli_query($conexao,$sql);
  include 'header.php';
?>
<html>
<head>
	<title>EXIBIR CONTATOS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="margin: 5%; background-color: #4287f5; border-radius: 2%;">
		<h1 class="text-center text-light py-4">AGENDA DE CONTATOS</h1>
		<!-- <a href = "painel.php">INICIO</a> -->
		<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead-light text-center">
			<tr>
				<th scope="col">FOTO</th>
				<th scope="col">NOME</th>
				<th scope="col">TELEFONE</th>
			</tr>
			</thead>
			<tbody class="text-center">
			<?php
			  while($tbl = mysqli_fetch_array($result)) {
				$nome = $tbl["nome"];
				$telefone = $tbl["telefone"];
				$end_image = $tbl["end_image"];
			  ?>
			  
			  <tr>
					<td><?php  echo "<img src='upload/".$end_image."' alt='Foto de Exibição' width='100px' height='100px' /><br>"; ?></td>
					<td><p class="lead"><strong><?php echo $nome ?></strong></p></td>
					<td><p class="lead"><strong><?php echo $telefone ?></strong></p></td>
			  </tr>
			  
			<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>
