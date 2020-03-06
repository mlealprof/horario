<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Turmas
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Turmas</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_disciplina_por_turma_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Turma</label>
              <select name="cod_turma" id="inputEstado" class="form-control">
                <option selected>Turma</option>
                <?php
                  $cod_escola = $_SESSION['cod_escola'];
                  $consulta = "SELECT nome FROM turma WHERE cod_escola = '$cod_escola'";
                  $resultado = mysqli_query($conexao, $consulta);
                  while ($array = mysqli_fetch_assoc($resultado)) {
                ?>
                <option><?php echo $array['nome']; ?></option>
                <?php
                  }
                ?>
              </select>
            </div>
             <div class="col">
              <label for="exampleInputPassword1" >Disciplina</label>
                <select name="cod_disciplina" id="inputEstado" class="form-control">
                  <option selected>Disciplina</option>
                  <?php
                    $cod_escola = $_SESSION['cod_escola'];
                    $consulta = "SELECT nome FROM disciplina WHERE cod_escola = '$cod_escola'";
                    $resultado = mysqli_query($conexao, $consulta);
                    while ($array = mysqli_fetch_assoc($resultado)) {
                  ?>
                  <option><?php echo $array['nome']; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              <div class="col">
              <label for="exampleInputPassword1" >Professor</label>
                <select name="cod_disciplina" id="inputEstado" class="form-control">
                  <option selected>Professor da Disciplina</option>               
                </select>
            </div>
<<<<<<< HEAD
            <div class="col">
              <label for="exampleInputPassword1" >Professor</label>
              <select name="cod_professor" id="inputEstado" class="form-control">
                <option selected>Professor da Disciplina</option>
                <?php
                  $cod_escola = $_SESSION['cod_escola'];
                  $consulta = "SELECT nome FROM professor WHERE cod_escola = '$cod_escola'";
                  $resultado = mysqli_query($conexao, $consulta);
                  while ($array = mysqli_fetch_assoc($resultado)) {
                ?>
                <option><?php echo $array['nome']; ?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div><br>
=======

 
           
          </div><br><br>
>>>>>>> upstream/master
          <div class="right_button">
             <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
          </div>
        </form>
      </div><br>
      <!-- Fim cadastro -->

      <!-- Tabela de cadastrados -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Turma</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Professor</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM disciplina_por_turma";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="4" class="text-center"><?php echo "Nenhuma turma cadastrada."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
                $selecionar = "SELECT nome FROM turma WHERE cod_turma = '" . $array['cod_turma'] . "'";
                $resultado_ = mysqli_query($conexao, $selecionar);
                $array_turma = mysqli_fetch_array($resultado_);
                $selecionar = "SELECT nome FROM disciplina WHERE cod_disciplina = '" . $array['cod_disciplina'] . "'";
                $resultado_ = mysqli_query($conexao, $selecionar);
                $array_disciplina = mysqli_fetch_array($resultado_);
                $selecionar = "SELECT nome FROM professor WHERE cod_professor = '" . $array['cod_professor'] . "'";
                $resultado_ = mysqli_query($conexao, $selecionar);
                $array_professor = mysqli_fetch_array($resultado_);
          ?>

            <tr>
              <form action="../exe/excluir_disciplina_turma_exe.php" method="get">
                <td><?php echo $array['cod_disciplina_por_turma']; ?></td>
                <td><?php echo $array_turma['nome']; ?></td>
                <td><?php echo $array_disciplina['nome']; ?></td>
<<<<<<< HEAD
                <td><?php echo $array_professor['nome']; ?></td>
=======
                <td></td>
>>>>>>> upstream/master
                <td><button type="submit" class="btn btn-danger" name="cod_disciplina_por_turma" value=<?php echo $array['cod_disciplina_por_turma']; ?>>Excluir</button></td>
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
