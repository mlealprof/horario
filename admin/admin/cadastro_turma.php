<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Turma
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Turmas</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_turma_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu Nome" required="required" name="nome">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Quantidade de Horários</label>
              <input type="text" class="form-control" placeholder="Digite a Quantidade de Horários" name="qtd_horários">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Turno</label>
              <input type="text" class="form-control" placeholder="Digite seu Turno" name="turno">
            </div>
        </form>          
      </div>
       <div>
          <label for="exampleInputPassword1"></label>  
          <tr>
            <div class="right_button">
             <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
            </div>
          </tr>
       </div> 
       <label for="exampleInputPassword1"></label>  

          <!-- Tabela de cadastrados -->
       <table class="table">
               <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Quantidade de horários</th>
                  <th scope="col">Turno</th>
                  <th scope="col">Ação</th>
                </tr>
               </thead>
              <tbody>
                <?php
                  $cod_escola = $_SESSION['cod_escola'];
                  $consulta = "SELECT * FROM turma WHERE cod_escola = '$cod_escola'";
                  $resultado = mysqli_query($conexao, $consulta);
                  if (mysqli_num_rows($resultado) == 0) {
                ?>
                  <tr>
                    <td colspan="5" class="text-center"><?php echo "Nenhuma turma cadastrada."; ?></td>
                  </tr>
                <?php
                  } else {
                    while ($array = mysqli_fetch_assoc($resultado)) {
                ?>
                  <tr>
                    <form action="../exe/excluir_turma_exe.php" method="get">
                      <td><?php echo $array['cod_turma']; ?></td>
                      <td><?php echo $array['nome']; ?></td>
                      <td><?php echo $array['qnt_horarios']; ?></td>
                      <td><?php echo $array['turno']; ?></td>                    
                      <td><button type="submit" class="btn btn-danger" name="cod_turma" value=<?php echo $array['cod_turma']; ?>>Excluir</button></td>
                    </form>
                  </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
       </table>
      <!-- Fim tabela de cadastrados -->
    </div>
  </section>
</main>
