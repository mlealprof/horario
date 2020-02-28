<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$ordem = $_POST['ordem'];
	$posicao = $_POST['posicao'];
	$descricao = $_POST['descricao'];

	// Inserindo dados na tabela
	$inserir_horario = "INSERT INTO horarios (ordem, posicao, descricao) VALUES ('$ordem', '$posicao', '$descricao')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_horario)) {
		echo '<script type="text/javascript">
			alert("Horário cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>