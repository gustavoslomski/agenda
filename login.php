<?php session_start();   $_SESSION["acesso"]=""; ?>

<html>
    <head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <body>
    	
	<div class="" style="padding: 6%;margin: 1% 20% 2% 20%; background-color: #4287f5; border-radius: 2%;">
		<form method="POST" action="logando.php">
			<h1 class="text-center text-light pt-2">LOGIN</h1>
			<div class=" b text-center bg-danger">	
			<?php
			if(@$_GET["erro"]!=""){
				echo @$_GET["erro"];
			}
			?>
			</div>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>EMAIL</label>
						<input id="email" type="email" name="email" class="form-control" placeholder="insira seu melhor e-mail">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>SENHA</label>
						<input id="senha" type="password" name="senha" class="form-control" placeholder="não use dados pessoais">
					</div>
				</div>
						
					<p class="text-center">Nao possui uma conta? <a class="text-light"  href="cadastro.php">Cadastre-se</a></p>
				<div class="col-md-6 offset-md-3 pb-2 ">
					<input id="botao" type="submit" value="Entrar" class="btn btn-secondary" style = "width: 100%"/>
				</div>
				</div>				
				
		</form>
	</div>	
    </body>
</html>
