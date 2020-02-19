<?php
	require 'conexao_exe.php';

	$nomedisciplina = $_POST['nomedisciplina'];

	$inserir_disciplina = "INSERT INTO disciplina (nome) VALUES ('$nomedisciplina')";
	mysqli_query($conexao, $inserir_disciplina);
?>