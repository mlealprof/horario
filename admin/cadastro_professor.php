<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Professor
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro Professor</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_professor_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Nome</label>
              <input type="text" class="form-control" placeholder="Digite o Nome Completo" required="required" name="nome">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="text" class="form-control" placeholder="Telefone para contato" required="required" name="telefone">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">CPF</label>
              <input type="text" class="form-control" placeholder="Digite o CPF" required="required" name="cpf">
            </div> 
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Endereço</label>
              <input type="text" class="form-control" placeholder="Digite o Endereço" required="required" name="endereco">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Número</label>
              <input type="text" class="form-control" placeholder="Digite o número da casa" required="required" name="numero">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">País</label>
              <input type="text" class="form-control" placeholder="Digite o País" required="required" name="pais">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Cidade</label>
              <input type="text" class="form-control" placeholder="Digite a Cidade" required="required" name="cidade">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Estado</label>
              <input type="text" class="form-control" placeholder="Digite o Estado" required="required" name="estado">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">CEP</label>
              <input type="text" class="form-control" placeholder="Digite o CEP" required="required" name="cep">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Masp</label>
              <input type="text" class="form-control" placeholder="Insira o Masp Do Professor" required="required" name="masp">
            </div>
          </div><br>  
          <div class="row">
            <div class="col">
              <div class="right_button">
                <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
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
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
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
                <td><button type="submit" class="btn btn-danger" name="cod_professor" value=<?php echo $array['cod_professor']; ?>>Excluir</button></td>
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
