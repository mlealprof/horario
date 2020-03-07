<?php
require ("header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  
    
  
     <div class="container font">


      
        <div class=" font">
        <form action="exe/cadastro_escola_exe.php" method="post">
           
          <div class="form-group">
            <label for="exampleInputPassword1">Nome da Escola:</label>
            <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome da Escola">

          </div>

  
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">CNPJ:</label>
              <input type="text" name="cnpj" class="form-control" placeholder="Digite seu CNPJ">
          </div>

          <div class="col">
              <label for="exampleInputPassword1">Telefone:</label>
              <input type="text" class="form-control" placeholder="Digite seu Telefone" name="telefone">
          </div>
          </div>
    
        <br>
    
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Endereço:</label>
              <input type="text" class="form-control" placeholder="Digite seu Enderço" name="endereco">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Nº:</label>
              <input type="text" class="form-control" placeholder="Digite o número da Residência" name="numero">
          </div>
          </div>
 
        <br>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Cidade:</label>
              <input type="text" class="form-control" placeholder="Digite sua Cidade" name="cidade">
          </div>
          <div class="col">

               <label for="exampleInputPassword1">Estado:</label>
                <select name="estado" id="inputEstado" class="form-control">

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
                         <option>
                         </option>
                      </select>

          </div>
          </div>
        <br>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">País:</label>

              <input type="text" class="form-control" placeholder="Digite seu País" name="pais">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">CEP:</label> 
              <input type="text" class="form-control" placeholder="Digite seu CEP" name="cep">

          </div>
          </div>
      <br>     
     
         <div class="row">
         <div class="col">
            <label for="exampleFormControlSelect1">Tipo de Escola:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="tipo_escola">
              <option>Escolher...</option>
              <option>Particular</option>
              <option>Pública</option>
              
            </select>
          </div>

          <div class="col">

            <label for="exampleFormControlSelect1">Tipo de Ensino:</label>

            <select class="form-control" id="exampleFormControlSelect1">
              <option>Escolher...</option>
              <option>Fundamental 01</option>
              <option>Fundamental 02</option>
              <option>Médio</option>
              <option>Fundamental 02 / Médio</option>
              <option>Fundamental 01 / Fundamental 02 / Médio</option>
              <option>Fundamental 01 / Fundamental 02</option>
              <option>Técnico</option>
              <option>Ensino Superior</option>
              <option>Pós-Graduação</option>
              <option></option>
            </select>
          </div>
          </div>
          <br>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Nome de usuário:</label>
              <input type="text" class="form-control" placeholder="Digite seu nome de usuário" required="required" name="usuario">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Email:</label>
              <input type="email" class="form-control" placeholder="Digite seu email" required="required" name="email">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Senha:</label> 
              <input type="password" class="form-control" placeholder="Digite sua senha" required="required" name="senha">
          </div>
          </div>         
          <br>
          <div class="right_button">
              <button type="submit" class="btn btn-primary">Enviar</button>
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
