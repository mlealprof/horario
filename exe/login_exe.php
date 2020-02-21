<?php
	// Conexão com o banco de dados
	require 'conexao.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	// Verificando dados de login
	$selecionar_login = "SELECT nome, email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'";
	$verificar_login = mysqli_query($conexao, $selecionar_login);
	$array = mysqli_fetch_array($verificar_login);

	// Falha no login
	if ($array['email'] == null) {
		echo '<script type="text/javascript">
            alert("Usuário ou senha incorretos.");
            window.location.href="../login.php";
            </script>'; // Voltar à página de login
	} else { // Sucesso no login
		$_SESSION['nome'] = $array['nome'];
		$_SESSION['email'] = $array['email'];
		echo '<script type="text/javascript">
            window.location.href="../cpanel/";
            </script>'; // Redirecionar para a Dashboard
	}
?>