<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$tipo_ensino = $_POST['tipo_ensino'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_tipo_ensino = "INSERT INTO tipo_ensino (cod_escola, tipo_ensino) VALUES ('$cod_escola', '$tipo_ensino')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_tipo_ensino)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=curso";
					</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=curso";
					</script>';
	}
?>
