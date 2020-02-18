
<?php
	require 'conexao_exe.php';

	
	$nome = $_POST['nome'];


	$inserir_disciplina
	 = "INSERT INTO escola (nome) VALUES ('$nome')";
	mysqli_query($conexao, $inserir_disciplina);

	// Conectado ao banco de dados, insere a discplina */ 
	 
?>