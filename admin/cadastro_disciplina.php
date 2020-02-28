<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  

    <br>
    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <form action="../exe/cadastro_disciplina_exe.php" method="post">

          <div class="row">
             <div class="col">
              <label for="exampleInputPassword1">Nome</label>

              <input type="text" class="form-control" placeholder="Digite o nome disciplina" name="nome">
            </div>
          </div>
          <br>
          <div class="right_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          <br>
        </div>
        </form>
      
  </div>
  </section>      
 
  </main>

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
      $consulta = "SELECT * FROM disciplina";
      $resultado = mysqli_query($conexao, $consulta);
      while ($array = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $array['cod_disciplina'] ?></td>
        <td><?php echo $array['nome'] ?></td> 
        <td><button type="button" class="btn btn-danger">Excluir</button></td>
      </tr>
    <?php } ?>
  </tbody>
</table>


