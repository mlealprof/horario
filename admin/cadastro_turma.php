
<!--==========================
  Cadastro de Turma
  ============================-->
  
<?php require '../exe/conexao_exe.php'; ?>


    <br>
    <section class="img_cadastros">
  
     <div class="container font">

        <div class=" font">
        <form action="" method="post">
           
          <div class="form-group">
            <label for="exampleInputPassword1">Código de Turma</label>
            <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o Código de Turma">

          </div>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Nome</label>

              <input type="text" class="form-control" placeholder="Digite seu Nome" name="nome">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Quantidade de Horários</label>
              <input type="text" class="form-control" placeholder="Digite a Quantidade de Horários" name="qtd_horários">

          </div>
          </div>
    
        <br>
    
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Turno</label>

              <input type="text" class="form-control" placeholder="Digite seu Turno" name="turno">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Código de Turno</label>
              <input type="text" class="form-control" placeholder="Digite o Código de Turno" name="cod_turno">

          </div>
          </div>
 
        <br>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Código de Escola</label>

              <input type="text" class="form-control" placeholder="Digite o Código de Escola" name="cod_escola">
          </div>

        </form>
        <br>
        <br>
        <br>
        <br> 

  </div>
          <tr><div class="right_button">
             <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          </tr>
       
  </section>      

  </main>
<<<<<<< HEAD
=======
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>  
    </tr>
  </thead>
  <tbody>
    <?php 
      $consulta = "SELECT * FROM turma";
      $resultado = mysqli_query($conexao, $consulta);
      while ($array = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $array['cod_turma'] ?></td>
        <td><?php echo $array['nome'] ?></td> 
        <td><button type="button" class="btn btn-danger">Excluir</button></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
>>>>>>> upstream/master
