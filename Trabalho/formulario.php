
<?php

	if(isset($_POST['submit']))
	{
		/* TESTE DE CONEXÃO
		print_r('Nome: ' .  $_POST['nome']);
			print_r('<br>');
		print_r('Email: ' . $_POST['email']);
			print_r('<br>');
		print_r('Telefone:' . $_POST['telefone']);
			print_r('<br>');
		print_r('Sexo: ' . $_POST['genero']);
			print_r('<br>');
		print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
			print_r('<br>');
		print_r('Cidade: ' . $_POST['cidade']);
			print_r('<br>');
		print_r('Estado: ' . $_POST['estado']);
			print_r('<br>');
		print_r('Endereço: ' . $_POST['endereco']);
		*/

		include_once('config.php');

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$sexo = $_POST['genero'];
		$data_nasc = $_POST['data_nascimento'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$endereco = $_POST['endereco'];


		$result = mysqli_query($conexao, "INSERT INTO usuarios(NOME, EMAIL, TELEFONE, SEXO, DATA_NASC, CIDADE, ESTADO, ENDERECO) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");


		//Assim que preencher o formulario ira direcionar para a tela principal
		//header('Location: telaDeLogin.php')
	}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	<title>Formulario</title>
</head>
<body>
	<a href="home.php">Voltar</a>

	<div class="box">
		<form action="formulario.php" method="POST">
			<fieldset>
					<legend><strong>Formulario de Inscrição</strong></legend>

					<br>

					<div class="inputBox"><!--Inicio Input Nome-->
							<input type="text" name="nome" id="nome" class="inputUser" required>
							<label for="nome" class="labelInput">Nome Completo</label>
					</div><!--Fim Input Nome-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Email-->
							<input type="text" name="email" id="email" class="inputUser" required>
							<label for="email" class="labelInput">E-mail</label>
					</div><!--Fim Input Email-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Telefone-->
							<input type="tel" name="telefone" id="telefone" class="inputUser" required>
							<label for="telefone" class="labelInput">Telefone</label>
					</div><!--Fim Input Telefone-->


						<br>


					<!--Inicio Input Radio - Sexo-->
					<p>Sexo</p>
					<input type="radio" id="feminino" name="genero" value="faminino" required>		
					<label for="feminino">Feminino</label>
								<br>
					<input type="radio" id="masculino" name="genero" value="masculino" required>
					<label for="masculino">Masculino</label>
								<br>
					<input type="radio" id="outro" name="genero" value="outro" required>
					<label for="outro">Outros</label>
					<!--Fim Input Radio - Sexo-->


						<br><br>


					<!--Inicio Input Data-->
						<label for="data_nascimento">Data de Nascimento</label>
						<input type="date" name="data_nascimento" id="data_nascimento" required>
					<!--Fim Input Data-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Cidade-->
						<input type="text" name="cidade" id="cidade" class="inputUser" required>
						<label for="cidade" class="labelInput">Cidade</label>
					</div><!--Fim Input Cidade -->


						<br><br>


					<div class="inputBox"><!--Inicio Input Estado-->
						<input type="text" name="estado" id="estado" class="inputUser" required>
						<label for="estado" class="labelInput">Estado</label>
					</div><!--Fim Input Estado-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Endereço-->
						<input type="text" name="endereco" id="endereco" class="inputUser" required>
						<label for="endereco" class="labelInput">Endereço</label>
					</div><!--Fim Input Endereço-->


						<br><br>


					<!--Inicio Botão Enviar-->
					<input type="submit" name="submit" id="submit">
					<!--Fim Botão Enviar-->




			</fieldset>
		</form>
	</div>

</body>
</html>