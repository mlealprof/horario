<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$tipo_usuario = $_POST['tipo_usuario'];

	// Inserindo dados na tabela
	$inserir_usuario = "INSERT INTO usuario (usuario, email, senha, tipo_usuario) VALUES ('$usuario', '$email', '$senha', '$tipo_usuario')";

	if (mysqli_query($conexao, $inserir_usuario)) {
		echo '<script type="text/javascript">
			alert("Usuario cadastrado com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else {
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>