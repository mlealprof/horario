
<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$nome = $_POST['nome'];

	// Inserindo dados na tabela
	$inserir_disciplina = "INSERT INTO disciplina (nome) VALUES ('$nome')";

<<<<<<< HEAD
	$inserir_disciplina = "INSERT INTO disciplina (nome) VALUES ('$nome_disciplina')";
	mysqli_query($conexao, $inserir_disciplina);



=======
	// Sucesso no cadastro
>>>>>>> upstream/master
	if (mysqli_query($conexao, $inserir_disciplina)) {
		echo '<script type="text/javascript">
			alert("Disciplina cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else { // Falha no cadastro
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
?>