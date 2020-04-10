<?php
session_start();
if($_SESSION["acesso"]==""){
    header("location: login.php");
}
include 'header.php';

?>
<html>
<head>
	<title>CADASTRO DE CONTATOS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>		
	<div style="margin: 5%; background-color: #4287f5; border-radius: 2%;" class="px-5">
		<form action="cadastrandoContato.php" method="POST" enctype="multipart/form-data">
			<h1 class="text-center text-light pt-2">UPLOAD DE ARQUIVOS</h1>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>NOME</label>
					<input type="text" required name="nome" class="form-control" placeholder="Nome"></input>
				</div>
				<div class="form-group col-md-6">
					<label>TELEFONE</label>
					<input type="number" required name="telefone" class="form-control" placeholder="Telefone" ></input>
				</div>
			</div>
			
			<div class="form-row mb-2">
				<div class="col-6">
					<label>ENDERECO</label>
					<input type="text" required name="endereco" class="form-control" placeholder="Endereço">
				</div>
				<div class="form-group col">
					<label>UF</label>
					<select class="form-control" name="estado">
	<option value="0">Escolha uma opção</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
	<!--				<input type="text" required name="estado" class="form-control" placeholder="estado"> -->
				</div>
				<div class="col">
					<label>NUMERO</label>
					<input type="number" required name="numero" class="form-control" placeholder="N°"  maxlength="5">
				</div>
			</div>
			
			<div class="form-row mb-4">
				<div class="col-6">
					<label>CIDADE</label>
					<input type="text" required name="cidade" class="form-control" placeholder="Cidade">
				</div>
				<div class="col-6">
					<label>BAIRRO</label>
					<input type="text" required name="bairro" class="form-control" placeholder="Bairro">
				</div>
			</div>
			
			<div class="form-group">
				<input type="file" required name="arquivo" class="form-control-file" value="Carregar Imagem">
			</div>
			<div class=" pb-4">
					<input type="submit" value="Salvar" class="btn btn-secondary"/>
			</div>
		</form>
	</div>
</body>
</html>
