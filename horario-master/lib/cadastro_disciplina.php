<?php
require ("header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  

    <br>
    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <form action="exe/cadastro_escola_exe.php" method="post">
           
          <div class="form-group">
            <label for="exampleInputPassword1">Código da Disciplina</label>
            <input type="text" class="form-control"  placeholder="Digite o codigo da disciplina">

          </div>

  
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Nome</label>

              <input type="text" class="form-control" placeholder="Digite o nome disciplina" name="nome">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Código da Escola</label>
              <input type="text" class="form-control" placeholder="Digite o codigo da escola">

          </div>
          </div>
    

         
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
         <br>
          <br>
         

        </form>
      
  </div>
  </section>      
 
  </main>

<?php
require ("footer.php");
?>
