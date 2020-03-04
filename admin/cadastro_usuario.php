
<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro de Usuários</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_usuario_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Usuário</label>
              <input type="text" class="form-control" placeholder="Digite o nome do usuario" required="required" name="usuario">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required="required" name="senha">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" class="form-control" placeholder="Digite seu Email" required="required" name="email">
            </div>
            <div class="col">
              <label for="exampleInputPassword1">Tipo de Usuário</label>
                <select type="text" class="form-control" placeholder="Digite o tipo de usuario" required="required">

                         <option selected>Estado...
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
                         </option>
              
            </div>
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
            <th scope="col">Nome de usuário</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $email = $_SESSION['email'];
            $consulta = "SELECT cod_usuario, usuario, email, tipo_usuario FROM usuario WHERE email = '$email'";
            $resultado = mysqli_query($conexao, $consulta);
            $array = mysqli_fetch_array($resultado);
          ?>
            <tr>
              <td><?php echo $array['cod_usuario']; ?></td>
              <td><?php echo $array['usuario']; ?></td>
              <td><?php echo $array['email']; ?></td>
              <td><?php echo $array['tipo_usuario']; ?></td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT cod_usuario, usuario, email, tipo_usuario FROM usuario WHERE tipo_usuario != 'Administrador' AND cod_escola = '$cod_escola'";
            $resultado = mysqli_query($conexao, $consulta);
            while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <td><?php echo $array['cod_usuario']; ?></td>
              <td><?php echo $array['usuario']; ?></td>
              <td><?php echo $array['email']; ?></td>
              <td><?php echo $array['tipo_usuario']; ?></td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- Fim tabela de cadastrados -->
    </div>
  </section>
</main>
