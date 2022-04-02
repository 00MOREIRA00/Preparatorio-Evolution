<?php
	session_start();
	/*
	TESTE PARA VER SE ESTÁ FUNCIONANDO

	print_r($_REQUEST);
	*/

	if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
	{
			
		//Acessar Sistema	
		include_once('config.php');

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "SELECT * FROM atendentes WHERE email = '$email' and senha = '$senha'";

		$result = $conexao-> query($sql);


			if (mysqli_num_rows($result) < 1) {
				unset($_SESSION['email']);
				unset($_SESSION['senha']);

				header('Location: telaDeLogin.php');

			 }else{
			 	$_SESSION['email'] = $email;
			 	$_SESSION['senha'] = $senha;

			 	header('Location: sistema.php');
			 }



	}
	else
	{

		//Não acessa
		header('Location: telaDeLogin.php');
	}
?>




$results