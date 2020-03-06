<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Cursos</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_curso_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Tipo de ensino</label>

              <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                ao selecionar uma das options no select abaixo o campo "outro tipo de ensino" ficara hidden assim nao podendo 
                inserir dados nele- ele é apenas para caso o ensino que a pessoa deseja listar nao esteja no select-->
                  <select class="browser-default custom-select">  
                  <option value="none" style="color: #DCDCDC">Selecione o tipo de ensino</option>               
                  <option value="infantil">Educação Infantil</option>
                  <option value="prescola">Pré-escola</option>
                  <option value="fundamental">Ensino Fundamental</option>
                  <option value="medio">Ensino Médio</option>
                  <option value="mediotec">Ensino Médio Técnico</option>
                  <option value="jovem">Educação de Jovens Adultos</option>
                  <option value="edcampo">Educação no Campo</option>
                  <option value="edespecial">Educação Especial</option>
                  <option value="facul">Educação Superior</option>
                </select><br><br>
                <label for="exampleInputPassword1">Outro tipo de ensino?</label>
              <input type="text" class="form-control" name="">
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
            <th scope="col">Tipo de ensino</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM tipo_ensino WHERE cod_escola = '$cod_escola'";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="3" class="text-center"><?php echo "Nenhum curso cadastrado."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <form action="../exe/excluir_curso_exe.php" method="get">
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
