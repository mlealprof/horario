<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Turma
  ============================-->
  
    <br>
    <section class="img_cadastros">
  
     <div class="container font">

        <div class=" font">
        <form action="" method="post">
           
          <div class="form-group">
            <label for="exampleInputPassword1">Código de Turma</label>
            <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o Código de Turma">

          </div>
<main>
  <!-- Cadastro -->
  <h1 align="center">Cadastro Turma</h1>
  <section class="img_cadastros">
    <div class="container font">
      <div class="font">
        <form action="../exe/cadastro_turma_exe.php" method="post">
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu Nome" required="required" name="nome">
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
          <tr>
            <div class="right_button">
             <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          </tr>
       
  </section>      

  </main>
  <br>
        <br>
        
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button type="button" class="btn btn-danger">Excluir</button></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button type="button" class="btn btn-danger">Excluir</button></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><button type="button" class="btn btn-danger">Excluir</button></td>
    </tr>
  </tbody>
</table>
=======
              <input type="text" class="form-control" placeholder="Digite a Quantidade de Horários" required="required" name="qnt_horarios">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label for="exampleInputPassword1">Turno</label>
              <select id="inputEstado" class="form-control" required="required" name="turno">
                <option selected>Turnos
                <!-- criar aki seletor dinamico-->
                </option>
                <option>
                </option>
              </select>
            </div>
          </div><br>
          <div class="right_button">
            <button type="submit" class="btn btn-primary tamanho_button">Salvar</button>
          </div>
        </form>
      </div><br>
      <!-- Fim cadastro -->

      <!-- Tabela de cadastrados -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome da Turma</th>
            <th scope="col">Quant. Horários</th>
            <th scope="col">Turno</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cod_escola = $_SESSION['cod_escola'];
            $consulta = "SELECT * FROM turma WHERE cod_escola = '$cod_escola'";
            $resultado = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($resultado) == 0) {
          ?>
            <tr>
              <td colspan="5" class="text-center"><?php echo "Nenhuma disciplina cadastrada."; ?></td>
            </tr>
          <?php
            } else {
              while ($array = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <td><?php echo $array['cod_turma']; ?></td>
              <td><?php echo $array['nome']; ?></td>
              <td><?php echo $array['qnt_horarios']; ?></td>
              <td><?php echo $array['turno']; ?></td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          <?php
              }
            }
          ?>
        </tbody>
      </table>
      <!-- Fim tabela de cadastrados -->
    </div>
  </section>
</main>
>>>>>>> upstream/master
