<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$descricao = $_POST['descricao'];
	$posicao = $_POST['posicao'];

	// Inserindo dados na tabela
	$inserir_dia_da_semana = "INSERT INTO dias_da_semana (descricao, posicao) VALUES ('$descricao', '$posicao')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_dia_da_semana)) {
		echo '<script type="text/javascript">
			alert("Dia da semana cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>
