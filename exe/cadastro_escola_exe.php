<?php
	require 'conexao_exe.php';

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

	$inserir_escola = "INSERT INTO escola (cnpj, nome, telefone, endereco, numero, cidade, estado, pais, cep, tipo_ensino, tipo_escola) VALUES ('$cnpj', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$tipo_ensino', '$tipo_escola')";
	mysqli_query($conexao, $inserir_escola);
?>