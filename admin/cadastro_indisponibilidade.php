<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Turma
  ============================-->
<main>
  <!-- Cadastro -->
     <h1>Indisponibilidades</h1><br>
      <div class="indisp">
        <table class="table">
          <tr>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th scope="col"><label for="indisponibilidades">Dia</label>
                <select id="dias">
                  <option value=""></option>  
                  <option value=""></option>  
                  <option value=""></option>  
                  <option value=""></option>  
                  <option value=""></option>  
                </select>
              </th>
              <th scope="col"><label>Horários</label>
                <select id="horario-proff">
                  <option></option>  
                  <option></option>  
                  <option></option>  
                  <option></option>  
                  <option></option>  
                </select>
              </th>
            <th scope="col"><button type="button" class="btn btn-success">Adicionar</button></th>
          </tr>
        </table>
      </div>
  </section>
</main>
