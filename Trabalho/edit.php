
<?php

	if(!empty($_GET['id']))
	{
		include_once('config.php');
		$id = $_GET['id'];
		$sqlSelect = "SELECT * FROM usuarios WHERE ID=$id";
		$result = $conexao->query($sqlSelect);


		if ($result->num_rows > 0) 
		{
			
			while($user_data = mysqli_fetch_assoc($result))
				{
					$nome = $user_data['NOME'];
					$email = $user_data['EMAIL'];
					$telefone = $user_data['TELEFONE'];
					$sexo = $user_data['SEXO'];
					$data_nasc = $user_data['DATA_NASC'];
					$cidade = $user_data['CIDADE'];
					$estado = $user_data['ESTADO'];
					$endereco = $user_data['ENDERECO'];
				}
				
		}
		else
		{
			header('Location: sistema.php');
		}


	

	}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	<title>Formulario</title>

	<style>
		

	#update{
	background-image: linear-gradient(to right, rgb(0,191,255), rgb(127,255,212));
	width: 100%;
	border: none;
	padding: 15px;
	color: white;
	font-size: 15px;
	cursor: pointer;
	border-radius: 10px;
		}

	#update:hover{
	background-image: linear-gradient(to right, rgb(0,191,255), rgb(72,61,139));
	}
	</style>
</head>
<body>
	<a href="sistema.php">Voltar</a>

	<div class="box">
		<form action="saveEdit.php" method="POST">
			<fieldset>
					<legend><strong>Formulario de Inscrição</strong></legend>

					<br>

					<div class="inputBox"><!--Inicio Input Nome-->
							<input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $nome ?>">
							<label for="nome" class="labelInput">Nome Completo</label>
					</div><!--Fim Input Nome-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Email-->
							<input type="text" name="email" id="email" class="inputUser" required value="<?php echo $email ?>">
							<label for="email" class="labelInput">E-mail</label>
					</div><!--Fim Input Email-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Telefone-->
							<input type="tel" name="telefone" id="telefone" class="inputUser" required value="<?php echo $telefone ?>">
							<label for="telefone" class="labelInput">Telefone</label>
					</div><!--Fim Input Telefone-->



						<br>


					<!--Inicio Input Radio - Sexo-->
					<p>Sexo</p>
					<input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ' ' ?> required>		
					<label for="feminino">Feminino</label>
								<br>
					<input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ' ' ?> required>
					<label for="masculino">Masculino</label>
								<br>
					<input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ' ' ?> required>
					<label for="outro">Outros</label>
					<!--Fim Input Radio - Sexo-->


						<br><br>


					<!--Inicio Input Data-->
						<label for="data_nascimento">Data de Nascimento</label>
						<input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data_nasc ?>">
					<!--Fim Input Data-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Cidade-->
						<input type="text" name="cidade" id="cidade" class="inputUser" required value="<?php echo $cidade ?>">
						<label for="cidade" class="labelInput">Cidade</label>
					</div><!--Fim Input Cidade -->


						<br><br>


					<div class="inputBox"><!--Inicio Input Estado-->
						<input type="text" name="estado" id="estado" class="inputUser" required value="<?php echo $estado ?>">
						<label for="estado" class="labelInput">Estado</label>
					</div><!--Fim Input Estado-->


						<br><br>


					<div class="inputBox"><!--Inicio Input Endereço-->
						<input type="text" name="endereco" id="endereco" class="inputUser" required value="<?php echo $endereco ?>">
						<label for="endereco" class="labelInput">Endereço</label>
					</div><!--Fim Input Endereço-->


						<br><br>


					<!--Inicio Botão Enviar-->
						<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="submit" name="update" id="update">
					<!--Fim Botão Enviar-->




			</fieldset>
		</form>
	</div>

</body>
</html>