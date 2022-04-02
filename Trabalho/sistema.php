<?php
	session_start();
	include_once('config.php');
	
	if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

		unset($_SESSION['email']);
		unset($_SESSION['senha']);

		header('Location: telaDeLogin.php');
	}

		$logado = $_SESSION['email'];



		//Criando a listagem de registros
		$sql = "SELECT * FROM usuarios ORDER BY id DESC";
		$result = $conexao->query($sql);



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/sistema.css">
	
	<title>Sistema</title>
</head>
<body>
	<!--Inicio Barra de Navegação-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">SISTEMA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="#navbarNav" aria-controls="navbarNav" aria-expanded="false"></button>
		</div>

		<div class="d-flex">
			<a class="btn btn-danger me-5" href="sair.php">Sair</a>
		</div>
	</nav>
	<!--Fim Barra de Navegação-->


	<div class="m-5">
		<table class="table text-white table-bg" style="background-color: rgba(0, 0, 0, 0.3); border-radius: 15px 15px 0 0;
">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Telefone</th>
					<th scope="col">Sexo</th>
					<th scope="col">Data de Nascimento</th>
					<th scope="col">Cidade</th>
					<th scope="col">Estado</th>
					<th scope="col">Endereço</th>
					<th scope="col">...</th>
				</tr>
			</thead>

			<tbody>
				<?php

					while($user_data = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>".$user_data['ID']."</td>";
						echo "<td>".$user_data['NOME']."</td>";
						echo "<td>".$user_data['EMAIL']."</td>";
						echo "<td>".$user_data['TELEFONE']."</td>";
						echo "<td>".$user_data['SEXO']."</td>";
						echo "<td>".$user_data['DATA_NASC']."</td>";
						echo "<td>".$user_data['CIDADE']."</td>";
						echo "<td>".$user_data['ESTADO']."</td>";
						echo "<td>".$user_data['ENDERECO']."</td>";
						echo "<td>

								<a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[ID]'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
  									<path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
									</svg>
								</a>

								<a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[ID]'>
									<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  									<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  									<path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
									</svg>
								</a>


						</td>";
						echo "</tr>";

					}

				?>
			</tbody>
		</table>
	</div>


</body>
</html>