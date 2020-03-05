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
              <label for="exampleInputPassword1">Ordem</label>
              <input type="text" class="form-control" placeholder="Digite a Ordem" required="required" name="ordem">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Posição</label>
              <input type="text" class="form-control" placeholder="Digite a Posição" required="required" name="posicao">
            </div>
          </div><br>
          <div class="row">
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
            </div><br>
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1">Hora Inicial</label>
                <input type="text" size="10" maxlength="10" class="form-control" placeholder="Digite a Posição" required="required" name="hora_inicial">
              </div>
              <div class="col">
                <label for="exampleInputPassword1">Hora Final</label>
                <input type="text" class="form-control" placeholder="Digite a Ordem" required="required" name="hora_final">
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
            <th scope="col">Dia da semana</th>
            <th scope="col">Hora incial</th>
            <th scope="col">Hora final</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
           <?php
            $email = $_SESSION['email'];
            $consulta = "SELECT cod_horarios, ordem, dia_da_semana, hora_inicial, hora_final FROM horarios WHERE email = '$email'";
            $resultado = mysqli_query($conexao, $consulta);
            $array = mysqli_fetch_array($resultado);
          ?>
            <tr>
              <td><?php echo $array['cod_usuario']; ?></td>
              <td><?php echo $array['usuario']; ?></td>
              <td><?php echo $array['email']; ?></td>
              <td><?php echo $array['tipo_usuario']; ?></td>
              <td><button type="button" class="btn btn-danger" disabled="disabled">Excluir</button></td>
            </tr>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT cod_usuario, usuario, email, tipo_usuario FROM usuario WHERE tipo_usuario != 'Administrador' AND cod_escola = '$cod_escola' AND email != '$email'";
            $resultado = mysqli_query($conexao, $consulta);
            while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <form action="../exe/excluir_usuario_exe.php" method="get">
                <td><?php echo $array['cod_usuario']; ?></td>
                <td><?php echo $array['usuario']; ?></td>
                <td><?php echo $array['email']; ?></td>
                <td><?php echo $array['tipo_usuario']; ?></td>
                <td><button type="submit" class="btn btn-danger" name="cod_usuario" value=<?php echo $array['cod_usuario']; ?>>Excluir</button></td>
              </form>
            </tr>
          <?php } ?>
              }
            }
          ?>
        </tbody>
      </table>
      <!-- Fim tabela de cadastrados -->
    </div>
  </section>
</main>
