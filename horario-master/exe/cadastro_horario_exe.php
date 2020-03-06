<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$ordem = $_POST['ordem'];
	$posicao = $_POST['posicao'];
	$dia_da_semana = $_POST['dia_da_semana'];
	$hora_inicial = $_POST['hora_inicial'];
	$hora_final = $_POST['hora_final'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_horario = "INSERT INTO horarios (ordem, posicao, dia_da_semana, hora_inicial, hora_final) VALUES ('$ordem', '$posicao', '$dia_da_semana', '$hora_inicial', '$hora_final')";

	// Sucesso no cadastro
	if (mysqli_query($conexao, $inserir_horario)) {
		echo '<script type="text/javascript">
		alert("Salvo com Sucesso !");
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	}
?>
