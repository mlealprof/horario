<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$qnt_aulas = $_POST['qnt_aulas'];

	// Inserindo dados na tabela
	$inserir_aula = "INSERT INTO aulas (qtn_aulas) VALUES ('$qnt_aulas')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_aula)) {
		echo '<script type="text/javascript">
			alert("Aula cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>
