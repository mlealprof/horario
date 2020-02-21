   <?php
      // Conexão com o banco de dados
      require("conexao_exe.php");
      session_start();


      // Pegando dados via POST
      $email = $_POST['email'];
      $senha = $_POST['senha'];
        

       // Consulta a tabela 
       $consulta = "SELECT email,senha FROM usuario WHERE email='$email' AND senha='$senha'";

       $resultado = mysqli_query($conexao,$consulta);
   
       $array = mysqli_fetch_array($resultado);
       
        if ($array['email']==null){
           //errou
         echo '<script type="text/javascript">
            alert("Usuário e/ou Senha Inválidos!");
            window.location.href="../login.php";
            </script>'; 
       }else{
            //logou
            $_SESSION['senha'] = $array['senha'];
            $_SESSION['email'] = $array['email'];

             echo '<script type="text/javascript">
            
            window.location.href="../cpanel/";
            </script>'; 
        }


   
  ?>