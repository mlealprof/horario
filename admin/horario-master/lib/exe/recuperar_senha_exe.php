<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';
	require '../phpmailer/src/PHPMailer.php'


	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Username = 'contato.timetable@gmail.com';
	$mail->Password = 'timetable2020';
	$mail->Port = 587;

	// Pegando dados via POST
	$email = $_POST['email'];

	$selecionar_email = "SELECT email FROM usuario WHERE email = '$email'";
	$verificar_email = mysqli_query($conexao, $selecionar_email);

	// Email não cadastrado
	if (mysqli_fetch_array($verificar_email)['email'] == null) {
		echo '<script type="text/javascript">
							alert("Email não cadastrado!");
							window.location.href="../model_cadastro.php";
							</script>';
	} else { // Email já existe
		echo '<script type="text/javascript">
						alert("Verifique seu email para recuperar a senha!");
						window.location.href="../index.php";
						</script>';
						$mail->setFrom('contato.timetable@email.com');
						$mail->addReplyTo('no-reply@email.com.br');
						$mail->addAddress('$email', 'Recuperar Senha'’);
						$mail->addCC('contato.timetable@email.com', 'Cópia');

						$mail->isHTML(true);
						$mail->Subject = 'Time Table - Recuperar Senha';
						$mail->Body    = '<b>Esqueceu a sua senha ?! Não se preocupe, recupere-a clicando no link abaixo</b><br><br>Clique  no <b>link</b> para <b>recuperar a senha</b>:';
						$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
						$mail->addAttachment('', '');
	}
?>