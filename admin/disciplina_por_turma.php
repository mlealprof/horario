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
              <select name="estado" id="inputEstado" class="form-control">
                <option selected>Turma
                <!-- criar aki seletor dinamico-->
                </option>
                <option>
                </option>
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1" >Disciplina</label>
                <select name="estado" id="inputEstado" class="form-control">
                  <option selected>Disciplina
                  <!-- criar aki seletor dinamico-->
                  </option>
                  <option>
                  </option>
                </select>
            </div>
          </div><br>
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
