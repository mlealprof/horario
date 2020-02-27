
   <?php
      // Conexão com o banco de dados
      require("conexao_exe.php");
      session_start();


      // Pegando dados via POST
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $tipo_usuario = $_POST['tipo_usuario'];
      $cod_escola = $_POST['cod_escola'];
        

       // Consulta a tabela 
       $consulta = "SELECT email,senha,tipo_usuario,cod_escola FROM usuario WHERE email='$email' AND senha='$senha' AND tipo_usuario = '$tipo_usuario' AND cod_escola = '$cod_escola'" ;

       $resultado = mysqli_query($conexao,$consulta);
   
       $array = mysqli_fetch_array($resultado);
       
        if ($array['email']==null){
           //errou
         echo '<script type="text/javascript">
            alert("Usuário e/ou Senha Inválidos!");
            window.location.href="../admin";
            </script>'; 
       }else{
            //logou
            $_SESSION['senha'] = $array['senha'];
            $_SESSION['email'] = $array['email'];
            $_SESSION['tipo_usuario'] = $array['tipo_usuario'];
            $_SESSION['cod_escola'] = $array['cod_escola'];

             echo '<script type="text/javascript">
            
            window.location.href="../cpanel/";
            </script>'; 
        }


   
  ?>
