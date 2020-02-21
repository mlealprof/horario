<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];


	// Inserindo dados na tabela
	$inserir_usuario = "INSERT INTO usuario (usuario,senha,email) VALUES ('$usuario', '$senha','$tipo_usuario')";

	if (mysqli_query($conexao, $inserir_usuario)) {
		echo '<script type="text/javascript">
			alert("");
			window.location.href="../cpanel.php";
			</script>';
	} else {
		echo '<script type="text/javascript">
			alert("Falha no login. Verifique os dados inseridos.");
			window.location.href="../cadastrar_usuario.exe.php";
			</script>';
	}
?>	