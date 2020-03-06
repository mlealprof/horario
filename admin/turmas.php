<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Turmas</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
  <!-- Tabela de cadastrados -->
       <table class="table">
               <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Turmas</th>
                  <th scope="col">Turno</th>
                  <th scope="col">Ação</th>
                  <th>&nbsp;</th>
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
