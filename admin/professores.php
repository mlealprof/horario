<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Professores</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
<!-- Tabela de cadastrados -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
            <th scope="col">indisponibilidade</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM professor WHERE cod_escola = '$cod_escola'";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="5" class="text-center"><?php echo "Nenhum professor cadastrado."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <form action="../exe/excluir_professor_exe.php" method="get">
                <td><?php echo $array['cod_professor']; ?></td>
                <td><?php echo $array['nome']; ?></td>
                <td><?php echo $array['telefone']; ?></td>
                <td><?php echo $array['endereco']; ?></td>
                <td><button type="submit" class="btn btn-danger" name="cod_professor" style="margin-left: -16px" value=<?php echo $array['cod_professor']; ?>>Excluir</button></td>
                </form>
                <form>
                  <td><a href="cadastro_indisponibilidade.php"><button type="" class="btn btn-primary" name="indisponibilidades" style="margin-left: -15px">indisponibilidade</button></a></td> <!-- linkar essa merda aq -->
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