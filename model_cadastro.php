<?php
require ("header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  


    <section class="img">
  
     <div class="container">
      
        <form action="exe/cadastro_escola_exe.php" method="post">          
          <div class="form-group">
            <label for="exampleInputPassword1">CNPJ</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cnpj">
          </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Nome</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nome">
          </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Telefone</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="telefone">
          </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Endereço</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="endereco">
          </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Numero</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="numero">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cidade</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cidade">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="estado">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pais</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="pais">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cep</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cep">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tipo Escola</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="tipo_escola">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tipo curso</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="tipo_ensino">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Data do cadastro</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="data_cadastro">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
          </div>
         
          <br>
          <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  </section>      
 
  </main>
<?php
require ("footer.php");
?>
