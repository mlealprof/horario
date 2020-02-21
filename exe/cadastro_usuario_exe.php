<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$tipo_usuario = $_POST['tipo_usuario'];

	$selecionar_email = "SELECT email FROM usuario WHERE email = '$email'";
	$verificar_email = mysqli_query($conexao, $selecionar_email);

	// Email disponível
	if (mysqli_fetch_array($verificar_email)['email'] == null) {
		// Inserindo dados na tabela
		$inserir_usuario = "INSERT INTO usuario (usuario, email, senha, tipo_usuario) VALUES ('$usuario', '$email', '$senha', '$tipo_usuario')";

		// Sucesso no cadastro
		if (mysqli_query($conexao, $inserir_usuario)) {
			echo '<script type="text/javascript">
							alert("Usuario cadastrado com sucesso!");
							window.location.href="../index.php";
							</script>'; // Redirecionar para a Dashboard
		} else { // Falha no cadastro
			echo '<script type="text/javascript">
							alert("Falha no cadastro. Verifique os dados inseridos.");
							window.location.href="../cadastro.php";
							</script>'; // Voltar à página de cadastro
		}
	} else { // Email já existe
		echo '<script type="text/javascript">
						alert("Email já existe!");
						window.location.href="../cadastro.php";
						</script>'; // Voltar à página de cadastro
	}
?>