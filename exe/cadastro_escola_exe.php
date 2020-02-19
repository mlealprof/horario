<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$cnpj = $_POST['cnpj'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	$cep = $_POST['cep'];
	$tipo_ensino = $_POST['tipo_ensino'];
	$tipo_escola = $_POST['tipo_escola'];

	// Inserindo dados na tabela
	$inserir_escola = "INSERT INTO escola (cnpj, nome, telefone, endereco, numero, cidade, estado, pais, cep, tipo_ensino, tipo_escola) VALUES ('$cnpj', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$tipo_ensino', '$tipo_escola')";
	mysqli_query($conexao, $inserir_escola);
?>