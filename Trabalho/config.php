<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'trabalho';

	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


	/*  TESTANDO A CONEXÃO
	if($conexao->connect_errno){
		echo "Erro";
	}
	else{
		echo "Conexão efetuada com sucesso";
	}
	*/
?>