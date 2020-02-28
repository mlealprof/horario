<?php
  require ("../header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  

    <br>
    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <form action="" method="post">
           
          

  
          <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Usuário</label>
            <input type="text"  class="form-control" placeholder="Digite o nome do usuario">
          </div>
            <br>
            <br>

          <div class="col">
              <label for="exampleInputPassword1">Senha</label>
              <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
          </div>
          </div>
    
        <br>
         <br>
            <br>
    
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Email</label>
              <input type="text" class="form-control" placeholder="Digite seu Email" name="email">
          </div>
           <br>
            <br>
          <div class="col">
              <label for="exampleInputPassword1">Tipo de Usuário</label>
              <input type="text" class="form-control" placeholder="Digite o tipo de usuario" >
          </div>
          </div>
 
        <br>

          <div class="row">
           
          
          <br>
          <div class="right_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          <br>
        </div>
              <br>
            <br>
             <br>
            <br>
             <br>
            <br>
            <br>
        </form>
      
  </div>
  </section>      
 
  </main>
<?php
require ("../footer.php");
?>
