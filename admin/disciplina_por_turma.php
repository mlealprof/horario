
<!--==========================
  Cadastro de Turmas
  ============================-->
  
<?php require '../exe/conexao_exe.php'; ?>


    <br>
    <section class="img_cadastros">
  
     <div class="container font">

        <h1 align="center">Cadastro de Turmas</h1>
      
        <div class=" font">
        <form action="../exe/cadastro_turma_exe.php" method="post">
          <div class="row">
         <div class="col">
          <label for="exampleInputPassword1" >Turma</label>
                <select name="estado" id="inputEstado" class="form-control">

                         <option selected>Turma
                         <!-- criar aki seletor dinamico-->
                         </option>
                         <option>
                         </option>
                      </select>

          </div>
         
          </div>
    <br>
          <div class="col">
          <label for="exampleInputPassword1" >Disciplina</label>
                <select name="estado" id="inputEstado" class="form-control">

                         <option selected>Disciplina
                         <!-- criar aki seletor dinamico-->
                         </option>
                         <option>
                         </option>
                      </select>

          </div>
          <tr><div class="right_button">
            <br>
             <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
          </div>
          </tr>
        </form>
 
        <br>
        <br>
        <br>
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
