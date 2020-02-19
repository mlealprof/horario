<<<<<<< HEAD

<?php
	require 'conexao_exe.php';

	
	$nome = $_POST['nome'];


	$inserir_disciplina
	 = "INSERT INTO escola (nome) VALUES ('$nome')";
	mysqli_query($conexao, $inserir_disciplina);

	// Conectado ao banco de dados, insere a discplina */ 
	 
=======
<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$nome_disciplina = $_POST['nome_disciplina'];

	// Inserindo dados na tabela
	$inserir_disciplina = "INSERT INTO disciplina (nome) VALUES ('$nome_disciplina')";
	mysqli_query($conexao, $inserir_disciplina);
>>>>>>> upstream/master
?>