<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Tela de login</title>
</head>
<body>

	<a href="home.php">Voltar</a>

	<div class="tela-login">
		<h1>Login</h1>

		<form action="testeLogin.php" method="POST">
			<input class="preencher" type="text" name="email" placeholder="Email">

				<br>
				<br>

			<input class="preencher" type="password" name="senha" placeholder="Senha">

				<br>
				<br>

			<input class="logar" type="submit" name="submit" value="Enviar">
		</form>

	</div>
</body>
</html>