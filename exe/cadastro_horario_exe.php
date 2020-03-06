<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	

	// Pegando dados via POST
	$posicao = $_POST['posicao'];
	$dia_da_semana = $_POST['dia_da_semana'];
	$hora_inicial_hora_final = $_POST['hora_inicial_hora_final'];
	
	

	// Inserindo dados na tabela
	$insere = "INSERT INTO horarios ( posicao, dia_da_semana, hora_inicial_hora_final) VALUES ('$posicao', '$dia_da_semana', '$hora_inicial_hora_final')";

	// Sucesso no cadastro
	  if(mysqli_query($conexao ,$insere))
	  {

          echo '<script type="text/javascript">
           window.location.href="../admin/index.php?tela=horario";
            </script>';         
      }else{
          echo '<script type="text/javascript">
            window.location.href="../admin/index.php?tela=horario";
            </script>';             
      }      
?>
