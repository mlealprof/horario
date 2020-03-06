<?php
	// Conexão com o banco de dados
	require 'conexao_exe.php';

	// Pegando dados da escola via POST
	$cnpj = $_POST['cnpj'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	$cep = $_POST['cep'];
	$tipo_escola = $_POST['tipo_escola'];

	// Pegando data do sistema
	date_default_timezone_set('America/Sao_Paulo');
	$data_cadastro = date("d/m/Y");

	// Pegando dados do usuário via POST
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	// Inserindo dados da escola na tabela
	$inserir_escola = "INSERT INTO escola (cnpj, nome, telefone, endereco, numero, cidade, estado, pais, cep, tipo_escola, data_cadastro) VALUES ('$cnpj', '$nome', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$tipo_escola', '$data_cadastro')";

	// Sucesso no cadastro da escola
	if (mysqli_query($conexao, $inserir_escola)) {
		// Selecionando código da escola
		$selecionar_escola = "SELECT cod_escola FROM escola WHERE nome = '$nome'";
		$resultado = mysqli_query($conexao, $selecionar_escola);
		$array = mysqli_fetch_array($resultado);
		$cod_escola = $array['cod_escola'];
		
		// Inserindo dados do usuário na tabela
		$inserir_usuario = "INSERT INTO usuario (usuario, email, senha, tipo_usuario, cod_escola) VALUES ('$usuario', '$email', '$senha', 'Administrador', '$cod_escola')";

		// Sucesso no cadastro do usuário
		if (mysqli_query($conexao, $inserir_usuario)) {
			echo '<script type="text/javascript">
							alert("Escola cadastrada com sucesso!");
							window.location.href="../index.php";
						</script>';
		} else { // Falha no cadastro do usuário
			echo '<script type="text/javascript">
							alert("Falha no cadastro. Verifique os dados inseridos.");
							window.location.href="../index.php";
						</script>';
		}
	} else { // Falha no cadastro da escola
		echo '<script type="text/javascript">
						alert("Falha no cadastro. Verifique os dados inseridos.");
						window.location.href="../index.php";
					</script>';
	}
?>
