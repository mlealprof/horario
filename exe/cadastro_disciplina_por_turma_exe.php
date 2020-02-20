<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$codigo_disciplina = $_POST['codigo_disciplina'];
	$codigo_turma = $_POST['codigo_turma'];
	$codigo_professor = $_POST['codigo_professor'];
	$carga_horaria = $_POST['carga_horaria'];

	// Inserindo dados na tabela
	$inserir_disciplina_turma = "INSERT INTO disciplia_por_turma (codigo_disciplina, codigo_turma, codigo_professor, carga_horaria) VALUES ('$codigo_disciplina', '$codigo_turma', '$codigo_professor', '$carga_horaria')";
	mysqli_query($conexao, $inserir_disciplina_turma);

  ?>