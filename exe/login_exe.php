
   <?php
      // Conexão com o banco de dados
      require("conexao_exe.php");
      session_start();


      // Pegando dados via POST
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);


       // Consulta a tabela 
       $consulta = "SELECT email,senha FROM usuario WHERE email='$email' AND senha='$senha'" ;

       $resultado = mysqli_query($conexao,$consulta);
   
       $array = mysqli_fetch_array($resultado);

       var_dump($array);
       
        if ($array['email']==null){
           //errou
         echo '<script type="text/javascript">
            alert("Usuário e/ou Senha Inválidos!");
            window.location.href="../login.php"
            </script>'; 
       }else{
            //logou
           
            $_SESSION['email'] = $array['email'];
            $_SESSION['tipo_usuario'] = $array['tipo_usuario'];
            $_SESSION['cod_escola'] = $array['cod_escola'];
            $_SESSION['usuario'] = $array['usuario'];

             echo '<script type="text/javascript">
            
            window.location.href="../admin";
            </script>'; 
        }


   
  ?>
