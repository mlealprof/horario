<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Horarios
  ============================-->
  


    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <br>
        <form action="../exe/cadastro_horario_exe.php" method="post">
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Ordem</label>
              <input type="text" class="form-control" placeholder="Digite a Ordem" required="required" name="ordem">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Posição</label>
              <input type="text" class="form-control" placeholder="Digite a Posição" required="required" name="posicao">
          </div>
          </div>
        <br>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Descrição</label>
              <input type="text" class="form-control" placeholder="Digite a Descrição" required="required" name="descricao">
          </div>
          

         <br>  
          <br> <br>  
          <br>
        </div>
        <div class="center_button">
              <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
        </div>
        </form>
        <br>
        <br>
        
  </div>
  </section>      
 
  </main>

   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ordem</th>
      <th scope="col">Posição</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>    
    </tr>
  </thead>
  <tbody>
    <?php 
      $consulta = "SELECT * FROM horarios";
      $resultado = mysqli_query($conexao, $consulta);
      while ($array = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $array['cod_horarios'] ?></td>
        <td><?php echo $array['ordem'] ?></td>
        <td><?php echo $array['posicao'] ?></td>
        <td><?php echo $array['descricao'] ?></td>
        <td><button type="button" class="btn btn-danger">Excluir</button></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

