<?php
require ("header.php");
?>
<!--==========================
  Área de Login
  ============================-->
  <section class ="img_cadastros">

    <div class="container">
    <!--==========================
  criar aki a Area de Login
  ============================-->
     <form>
          <br>
          <br>
          <div class="col tamanho_fontlabel">
            <div class=" font">

              <label for="exampleInputPassword1">Email</label>
              <input type="text" class="form-control tamanho_input" placeholder="Digite o seu Email">
          </div>
          <br>
          <div class="col tamanho_fontlabel">
              <label for="exampleInputPassword1">Senha</label>
              <input type="text" class="form-control tamanho_input" placeholder="Digite a sua Senha">
          </div>
          </div>
        </form>
        <br>
        <br>
          <div class="center_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
            </div>
          </div>
    </div>
</section>
  </main>
  <<?php
require ("footer.php");
?>