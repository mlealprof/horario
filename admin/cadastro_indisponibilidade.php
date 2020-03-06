<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Indisponibilidade
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Indisponibilidades</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_indisponibilidade_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Dia</label>

          
                  <select class="browser-default custom-select">  
                  <option value="none" style="color: #DCDCDC">Selecione o dia</option>               
                  <option value="segunda_feira">Segunda-Feira</option>
                  <option value="terca_feira">Terça-Feira</option>
                  <option value="quarta_feira">Quarta-Feira</option>
                  <option value="quinta_feira">Quinta-Feira</option>
                  <option value="sexta_feira">Sexta-Feira</option>
                  <option value="sabado">Sábado</option>
                  
                </select><br><br>
                <label for="exampleInputPassword1">Horário</label>
              <input type="text" class="form-control" name="" placeholder="Ex:7:00 as 7:50">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <div class="right_button">
                <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
              </div>
            </div>
          </div>
      </form><br>
      <!-- Fim cadastro -->

      <!-- Tabela de cadastrados -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Dia</th>
            <th scope="col">Horário</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM horarios ";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="3" class="text-center"><?php echo "Nenhuma Indisponibilidade cadastrado."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <form action="../exe/excluir_disciplina_exe.php" method="get">
                <td><?php echo $array['cod_tipo_ensino']; ?></td>
                <td><?php echo $array['tipo_ensino']; ?></td>
                <td><button type="submit" class="btn btn-danger" name="cod_tipo_ensino" value=<?php echo $array['cod_tipo_ensino']; ?>>Excluir</button></td>
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
