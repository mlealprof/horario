<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$nome = $_POST['nome'];
	$qnt_horarios = $_POST['qnt_horarios'];
	$turno = $_POST['turno'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_turma = "INSERT INTO turma (nome, qnt_horarios, turno, cod_escola) VALUES ('$nome', '$qnt_horarios', '$turno', '$cod_escola')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_turma)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=turma";
					</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=turma";
					</script>';
	}
?>
