<?php
	// Conexão com o banco de dados
	require("conexao_exe.php");

	// Inicio da sessão
	session_start();

	// Pegando dados via POST
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	// Consulta a tabela 
	$consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

	if ($resultado = mysqli_query($conexao, $consulta)) {
		$array = mysqli_fetch_array($resultado);
		
		if ($array == null) {
			//errou
			echo '<script type="text/javascript">
							alert("Usuário e/ou Senha Inválidos!");
							window.location.href="../login.php"
						</script>';
		} else {
			//logou
			// Definindo variáveis da sessão
			$_SESSION['email'] = $array['email'];
			$_SESSION['tipo_usuario'] = $array['tipo_usuario'];
			$_SESSION['usuario'] = $array['usuario'];

			// Selecionando nome da escola
			$cod_escola = $array['cod_escola'];
			$consulta = "SELECT cod_escola, nome FROM escola WHERE cod_escola = '$cod_escola'";
			$resultado = mysqli_query($conexao,$consulta);
			$array = mysqli_fetch_array($resultado);
			$_SESSION['cod_escola'] = $array['cod_escola'];
			$_SESSION['nome_escola'] = $array['nome'];

			echo '<script type="text/javascript">
							window.location.href="../admin";
						</script>';
		}
	}
?>
