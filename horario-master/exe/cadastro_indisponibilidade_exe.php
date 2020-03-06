<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$descricao = $_POST['descricao'];

	// Inserindo dados na tabela
	$inserir_indisponibilidade = "INSERT INTO indisponibilidade (descricao, posicao) VALUES ('$descricao', '$posicao')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_indisponibilidade)) {
		echo '<script type="text/javascript">
			alert("Indisponibilidade cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>
