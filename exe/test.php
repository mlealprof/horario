<?php

// Conexão com o banco de dados
	require 'conexao_exe.php';

//the subject
$sub = "Time Table - Redenifindo Senha";
//the message

//recipient email here
$email =  $_POST['email'];

$selecionar_email = "SELECT email,cod_usuario FROM usuario WHERE email = '$email'";
$verificar_email = mysqli_query($conexao, $selecionar_email);
$resultado = mysqli_fetch_array($verificar_email);
$usu = $resultado['cod_usuario'] ;

$msg = "Esqueceu a sua senha ?! Não se preocupe, recupere-a clicando no link abaixo!
    http://localhost/projeto/horario/rec_senha.php?cod_usuario=$usu
    Time Table - contato.timetable@email.com";
   // Email não cadastrado
	if ($resultado['email'] == null) {
		echo '<script type="text/javascript">
							alert("Email não cadastrado!");
							window.location.href="../model_cadastro.php";
							</script>';
	} else { // Email já existe
		echo '<script type="text/javascript">
						alert("Verifique seu email para recuperar a senha!");
						window.location.href="../index.php";
						</script>';

	//send email
        mail($email,$sub,$msg);
	}

?>



