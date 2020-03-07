<?php require '../exe/conexao_exe.php'; ?>

<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Professores</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_professor_exe.php" method="post">
          <div class="row">
            <div class="col">
             <label for="exampleInputPassword1">Nome</label>
              <input type="text" class="form-control" placeholder="Digite o seu nome" required="required" name="nome">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="text" class="form-control" placeholder="Telefone para contato" name="telefone">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">CPF</label>
              <input type="text" class="form-control" placeholder="Digite o CPF" name="cpf">
            </div> 
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Endereço</label>
              <input type="text" class="form-control" placeholder="Digite o Endereço" name="endereco">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Número</label>
              <input type="text" class="form-control" placeholder="Digite o número da casa" name="numero">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">País</label>
              <input type="text" class="form-control" placeholder="Digite o País" name="pais">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Cidade</label>
              <input type="text" class="form-control" placeholder="Digite a Cidade" name="cidade">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Estado</label>
                <select class="browser-default custom-select">                 
                 <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                  <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="col">
              <label for="exampleInputPassword1">CEP</label>
              <input type="text" class="form-control" placeholder="Digite o CEP" name="cep">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Masp</label>
              <input type="text" class="form-control" placeholder="Insira o Masp Do Professor" name="masp">
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
      
      <!-- indisponibilidades-->
      <br>
      <!-- FIM indisponibilidades-->

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
                <form action="index.php" method="GET">
                  <td>
                    <input type="hidden" name="tela" value="indisponibilidades"></input>
                    <input type="hidden" name="cod_professor" value=<?php echo $array['cod_professor'];?>></input>

                    <button type="submit" class="btn btn-primary" name="<?php    $array['cod_professor'];?>" style="margin-left: -15px">Indisponibilidade</button></a></td> 
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
