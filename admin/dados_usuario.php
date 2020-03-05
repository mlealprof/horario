<?php require '../exe/conexao_exe.php'; ?>

<!--==========================
  Dados de Usuario
  ============================-->
<main>
  <!-- Cadastro -->
  <h1 align="center">Dados do Usuários</h1>
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
              <!--<input type="text" class="form-control" placeholder="Digite o tipo de usuario" required="required" name="tipo_usuario">-->
              <select class="form-control" required="required" name="tipo_usuario">
                <option selected="selected">Padrão</option>
                <option>Administrador</option>
                <option>Coordenador</option>
                <option>Diretor</option>
                <option>Professor</option>
                <option>Supervisor</option>
              </select>
            </div>
            <div clas="row">
            <div class="col">
               <br>
                <button type="submit" class="btn btn-primary tamanho_button">Editar</button>
            </div>
          </div>
        </form>
      </div><br>
      <!-- Fim cadastro -->
</form>
</div>
</div>
</section>
</main>