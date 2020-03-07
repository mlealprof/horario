<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo_usuario = $_POST['tipo_usuario'];

	// Inserindo dados na tabela
	$inserir_usuario = "INSERT INTO usuario (usuario,email,senha,tipo_usuario) VALUES ('$usuario','$email','$senha','$tipo_usuario')";
	mysqli_query($conexao, $inserir_usuario);

	if (mysqli_query($conexao, $inserir_usuario)) {
			echo '<script type="text/javascript">
			  alert("Usuário cadastrado com sucesso !");
			  window.location.href="../index.php"
			  </script>';
		}else{
			echo '<script type="text/javascript">
			  alert("Erro ao cadastrar usuário !");
			  window.location.href="../index.php"
			  </script>';
		}

  ?>