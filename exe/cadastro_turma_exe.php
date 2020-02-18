<?php
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
  
   



?>