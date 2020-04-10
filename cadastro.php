<html>
    <head>
		<title>CADASTRO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			body{
			background-color: #fff;
		}
		h1, label, p, a, input{
			font-family: 'Bebas Neue', cursive;
			color: white;
		}
		::--webkit-input-placeholder{
			font-family: 'Bebas Neue', cursive;
		}
		::-moz-placeholder {
			font-family: 'Bebas Neue', cursive;

		}
		p a{
			text-decoration: underline;
		}
		#botao{
			background-color: #b4b6bf;
		}
		.esconder{
			visibility: hidden;
		}
		small{
			font-family: 'Bebas Neue', cursive;
		}
		</style>
    </head>
    <body>
    	<script type="text/javascript">
    		$(function() {
    			
    			$("#senha").keyup(function(){
    				    var value = $(this).val();
    				    if(value.length>7){
    				    	$("#confirmar").removeClass("esconder");
    				    } else if(value.length < 1){
	   				    	$("#confirmar").addClass("esconder");

    				    }
    			});
    			function validarSenha(senha, confirmSenha){
        			if (senha != confirmSenha){ 
             			return false;
        			}
        			return true;
 				};
 				$("#confirmSenha").keyup(function(){
 					
 					var senha = $("#senha").val();
 					var value = $(this).val();
 					var pass = validarSenha(senha,value);
 					if(pass){
 						$(".pass").remove();
 						$("#confirmSenha").after("<small class='pass' style='color:green;'>SENHA CONFERE</small>");
 					}else if(((! pass))){
 						$(".pass").remove();
 						$("#confirmSenha").after("<small class='pass' style='color:red;'>SENHA NÃO CONFERE</small>");
 					}
 				});
    		});
    	</script>
		<div style="padding: 1% 6% 1% 6%; margin: 0.5% 20% 2% 20%; background-color:  #4287f5; border-radius: 2%;">
			<form method="POST" action="cadastrando.php">
				<h1 class="text-center text-light pt-2">CADASTRE-SE</h1>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>NOME</label>
						<input type="text" required name="nome" class="form-control" placeholder="Nome Completo">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>IDADE</label>
						<input type="number" required name="idade" class="form-control" placeholder="Idade">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>EMAIL</label>
						<input type="email" required name="email" class="form-control" placeholder="Seu melhor e-mail">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>SENHA</label>
						<input id="senha" type="password" required name="senha" class="form-control" placeholder="não utilize dados pessoais">
					</div>
				</div>
						<div class="form-group">

						<div class="col-md-6 offset-md-3">
							<div class="esconder" id="confirmar">
						<label>SENHA</label>
						<input id="confirmSenha" type="password" name="confirmSenha" class="form-control" placeholder="confirme sua senha">
					</div>
					</div>
					</div>
				<p class="text-center">Ja possui uma conta? <a class = "text-light" href="home.php">Faça login</a></p>
				<div class="col-md-6 offset-md-3 pb-2 ">
					<input type="submit" value="Cadastrar" class="btn btn-secondary" style = "width: 100%"/>
				</div>
			</form>
		</div>
    </body>
</html>
