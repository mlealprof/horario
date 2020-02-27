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
	$tipo_escola = $_POST['tipo_escola'];

	date_default_timezone_set('America/Sao_Paulo');
	$data_cadastro = date("d/m/Y");

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	// Inserindo dados na tabela
	$inserir_escola = "INSERT INTO escola (cnpj, nome, telefone, endereco, numero, cidade, estado, pais, cep, tipo_escola, data_cadastro) VALUES ('$cnpj', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$tipo_escola', '$data_cadastro')";

	$inserir_usuario = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_escola) and mysqli_query($conexao, $inserir_usuario)) {
		echo '<script type="text/javascript">
			alert("Escola cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>