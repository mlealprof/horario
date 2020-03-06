<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Iniciando sessão
	session_start();

	// Pegando dados via POST
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	$cep = $_POST['cep'];
	$masp = $_POST['masp'];

	// Pegando código da escola
	$cod_escola = $_SESSION['cod_escola'];

	// Inserindo dados na tabela
	$inserir_professor = "INSERT INTO professor (cpf, nome, telefone, endereco, numero, cidade, estado, pais, cep, masp, cod_escola) VALUES ('$cpf', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$masp', '$cod_escola')";

	if (mysqli_query($conexao, $inserir_professor)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=professor";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../admin/index.php?tela=professor";
					</script>';
	}
?>
