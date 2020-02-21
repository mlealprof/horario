<?php
require ("header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  


    <section class="img_cadastros">
  
     <div class="container font">


      
<<<<<<< HEAD
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
=======
        <div class=" font">
        <form>
           
          <div class="form-group">
            <label for="exampleInputPassword1">Nome da Escola</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome da Escola">
          </div>

        <form>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">CNPJ</label>
              <input type="text" class="form-control" placeholder="Digite seu CNPJ">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="text" class="form-control" placeholder="Digite seu Telefone">
          </div>
          </div>
        </form>
        <br>
        <form>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Enderço</label>
              <input type="text" class="form-control" placeholder="Digite seu Enderço">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Nº</label>
              <input type="text" class="form-control" placeholder="Digite o número da Residência">
          </div>
          </div>
        </form>
        <br>
        <form>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Cidade</label>
              <input type="text" class="form-control" placeholder="Digite sua Cidade">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Estado</label>
              <input type="text" class="form-control" placeholder="Digite seu Estado">
          </div>
          </div>
        </form>
        <br>
        <form>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Pais</label>
              <input type="text" class="form-control" placeholder="Digite seu Pais">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">CEP</label> 
              <input type="text" class="form-control" placeholder="Digite seu CEP">
>>>>>>> upstream/master
          </div>
          </div>
        </form>
        <br>     
        <form>
         <div class="row">
         <div class="col">
            <label for="exampleFormControlSelect1">Tipo de Escola</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Escolher...</option>
              <option>Particular</option>
              <option>Pública</option>
              
            </select>
          </div>
          <div class="col">
            <label for="exampleFormControlSelect1">tipode Ensino</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Escolher...</option>
              <option>Fundamental-1</option>
              <option>Fundamental-2</option>
              <option>Médio</option>
              <option>Fundamental-2/Médio</option>
              <option>Fundamental-1/Fundamental-2/Médio</option>
              <option>Fundamental-1/Fundamental-2</option>

              <option></option>
            </select>
          </div>
          </div>

        </form>
         
          <br>
          <div class="center_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          <br>
        </div>

        </form>
      
  </div>
  </section>      
 
  </main>
<?php
require ("footer.php");
?>
