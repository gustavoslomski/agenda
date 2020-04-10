<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MINHA AGENDA</title>
	<style>
		.n{
			 background-color: #4287f5;
		}
		a{
			font-size:20px;	
		}
		ul li a:hover{
			background-color: white;
		}
	</style>
  </head>
  <body>
	
	
	<nav class="navbar navbar-expand-md navbar-light n">
			<a class="navbar-brand d-sm-block" style="padding:10px 10px; background-color:white;" href="painel.php">
			  PAGINA INICIAL
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#seila" aria-controls="#seila" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		<div style="font-family: 'Bebas Neue', cursive;
		color: white;" class="collapse navbar-collapse" id="seila">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			  <a class="nav-link" style="" href="cadastroContato.php">CADASTRAR CONTATOS<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			  <a class="nav-link" href="mostrarContato.php">VISUALIZAR CONTATOS</a>
			</li>
			<li class="nav-item active">
			  <a class="nav-link" href="sair.php">SAIR</a>
			</li>
			</ul>
		</div>     
	</nav> 
  </body>
</html>
