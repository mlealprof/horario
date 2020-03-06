<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Horarios
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Horários</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_horario_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Posição</label>
              <input type="text" class="form-control" placeholder="Digite a Posição" required="required" name="posicao">
            </div>
                  <div class="col">
              <label for="exampleInputPassword1">Selecione o dia da semana</label>
                <select type="text" class="form-control" placeholder="Digite o tipo de usuario" required="required" name ="dia_da_semana">
                  <option selected>Dia da Semana...
                    <option value="DO">Domingo</option>
                    <option value="SE">Segunda-feira</option>
                    <option value="TE">Terça-feira</option>
                    <option value="Qa">Quarta-feira</option>
                    <option value="Qi">Quinta-feira</option>
                    <option value="Sx">Sexta-feira</option>
                    <option value="Sa">Sábado</option>
                  </option>
                </select>
            </div>
              <div class="col">
                <label for="exampleInputPassword1">Hora Inicial e Final</label>
                <input type="text" size="90" maxlength="90" class="form-control" placeholder="Ex: 18:30 ás 19:20" required="required" name="hora_inicial">
              </div>
            </div><br>
          <div class="row">
            <div class="col">
              <div class="right_button">
                <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
              </div>
            </div>
          </div>
        </form>
      </div><br>
      <!-- Fim cadastro -->

      <!-- Tabela de cadastrados -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ordem</th>
            <th scope="col">Posição</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM horarios WHERE cod_escola = '$cod_escola'";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="5" class="text-center"><?php echo "Nenhum horário cadastrado."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <form action="../exe/excluir_horario_exe.php" method="get">
                <td><?php echo $array['cod_horarios']; ?></td>
                <td><?php echo $array['ordem']; ?></td>
                <td><?php echo $array['posicao']; ?></td>
                <td><?php echo $array['descricao']; ?></td>
                <td><button type="submit" class="btn btn-danger" name="cod_horarios" value=<?php echo $array['cod_horarios']; ?>>Excluir</button></td>
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
