<?php
<<<<<<< HEAD
   require ("conexao.php");

   $nome = $_POST['nome'];
   $qdt_horarios = $_POST['qtd_horarios'];
   $turno = $_POST['turno'];
   
     $insere = "INSERT INTO tabela_turma (nome,qtd_horarios,turno) VALUES ('$nome','$qtd_horarios','$turno)";

   

          if(mysqli_query($conexao,$insere)){

          echo '<script type="text/javascript">
            alert("Salvo com Sucesso !");
                   
      }else{
          echo '<script type="text/javascript">
            alert("Erro ao Inserir !");
                        
      }      
  
   



=======
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados via POST
	$nome = $_POST['nome'];
	$qtd_horarios = $_POST['qtd_horarios'];
	$turno = $_POST['turno'];

	// Inserindo dados na tabela
	$inserir_turma = "INSERT INTO turma (nome, qtd_horarios, turno) VALUES ('$nome', '$qtd_horarios', '$turno')";

	if (mysqli_query($conexao, $inserir_turma)) {
		echo '<script type="text/javascript">
			alert("Turma cadastrada com sucesso!");
			window.location.href="../index.php";
			</script>';
	} else {
		echo '<script type="text/javascript">
			alert("Falha no cadastro. Verifique os dados inseridos.");
			window.location.href="../index.php";
			</script>';
	}
>>>>>>> upstream/master
?>