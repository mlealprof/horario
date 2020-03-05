<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$nome = $_POST['nome'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_disciplina = "INSERT INTO disciplina (nome, cod_escola) VALUES ('$nome', '$cod_escola')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_disciplina)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=disciplina";
					</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=disciplina";
					</script>';
	}
?>
