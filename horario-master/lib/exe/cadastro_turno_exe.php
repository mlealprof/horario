<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$descricao = $_POST['descricao'];
	$qtd_horarios = $_POST['qtd_horarios'];
	$turno = $_POST['turno'];

	// Inserindo dados na tabela
	$inserir_turno = "INSERT INTO turno (descricao, qtd_horarios, turno) VALUES ('$descricao', '$qtd_horarios', '$turno')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_turno)) {
		echo '<script type="text/javascript">
			alert("Turno cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>
