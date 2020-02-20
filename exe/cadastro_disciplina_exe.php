<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$nome_disciplina = $_POST['nome_disciplina'];

	// Inserindo dados na tabela
	$inserir_disciplina = "INSERT INTO disciplina (nome) VALUES ('$nome_disciplina')";
	mysqli_query($conexao, $inserir_disciplina);

	if (mysqli_query($conexao, $inserir_disciplina)) {
			echo '<script type="text/javascript">
			  alert("Disciplina cadastrada com sucesso !");
			  window.location.href="../index.php"
			  </script>';
		}else{
			echo '<script type="text/javascript">
			  alert("Erro ao cadastrar disciplina !");
			  window.location.href="../cadastro_disciplina_exe.php"
			  </script>';
		}
?>