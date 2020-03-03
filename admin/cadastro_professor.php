<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro Horários</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_horario_exe.php" method="post">
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Nome</label>
                <input type="text" class="form-control" placeholder="Digite o Nome Completo" required="required" name="nome_proff">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Telefone</label>
                <input type="text" class="form-control" placeholder="Telefone para contato" required="required" name="telefone_proff">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">CPF</label>
                <input type="text" class="form-control" placeholder="Digite o CPF" required="required" name="cpf_proff">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Endereço</label>
                <input type="text" class="form-control" placeholder="Digite o Endereço" required="required" name="endereco_proff">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Número</label>
                <input type="text" class="form-control" placeholder="Digite o número da casa" required="required" name="num_casa_proff">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">País</label>
                <input type="text" class="form-control" placeholder="Digite o País" required="required" name="pais_proff">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Cidade</label>
                <input type="text" class="form-control" placeholder="Digite a Cidade" required="required" name="cidade_proff">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Estado</label>
                <input type="text" class="form-control" placeholder="Digite o Estado" required="required" name="estado_proff">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">CEP</label>
                <input type="text" class="form-control" placeholder="Digite o CEP" required="required" name="cep_proff">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1">Masp</label>
                <input type="text" class="form-control" placeholder="Insira o Masp Do Professor" required="required" name="masp_proff">
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
              <td colspan="5" class="text-center"><?php echo "Nenhuma disciplina cadastrada."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <td><?php echo $array['cod_horarios']; ?></td>
              <td><?php echo $array['ordem']; ?></td>
              <td><?php echo $array['posicao']; ?></td>
              <td><?php echo $array['descricao']; ?></td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
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