<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$ordem = $_POST['ordem'];
	$posicao = $_POST['posicao'];
	$descricao = $_POST['descricao'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_horario = "INSERT INTO horarios (ordem, posicao, descricao, cod_escola) VALUES ('$ordem', '$posicao', '$descricao', '$cod_escola')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_horario)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	}
?>
