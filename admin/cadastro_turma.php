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
            <div class="col">
                <label for="exampleInputPassword1">Código de Turno</label>
                <input type="text" class="form-control" placeholder="Digite o Código de Turno" name="cod_turno">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Código de Escola</label>
              <input type="text" class="form-control" placeholder="Digite o Código de Escola" name="cod_escola">
          </div>

        </form>
      </div>
          <tr>
            <div class="right_button">
             <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
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
