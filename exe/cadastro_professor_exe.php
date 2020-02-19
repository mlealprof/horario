<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	$cep = $_POST['cep'];
	$masp = $_POST['masp'];

	// Inserindo dados na tabela
	$inserir_professor = "INSERT INTO escola (cpf, nome, telefone, endereco, numero, cidade, estado, pais, cep, masp) VALUES ('$cpf', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$masp')";
	mysqli_query($conexao, $inserir_professor);
?>
