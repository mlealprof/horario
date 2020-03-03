<!DOCTYPE html>
<html>
<head>
	<title>Cadastro escola</title>
</head>
<body>
	<!--<form action="cadastro_usuario_exe.php" method="post">
		CNPJ: <input type="text" name="cnpj"><br>
		Nome: <input type="text" name="nome"><br>
		Telefone: <input type="text" name="telefone"><br>
		Endereço: <input type="text" name="endereco"><br>
		Número: <input type="text" name="numero"><br>
		Cidade: <input type="text" name="cidade"><br>
		Estado: <input type="text" name="estado"><br>
		País: <input type="text" name="pais"><br>
		CEP: <input type="text" name="cep"><br>
		Tipo de ensino: <input type="text" name="tipo_ensino"><br>
		Tipo de escola: <input type="text" name="tipo_escola"><br>
		<input type="submit" name="enviar">
	</form>-->
	Cadastrar Escola<br>
	<form action="cadastro_escola_exe.php" method="post">
		CNPJ: <input type="text" name="cnpj"><br>
		Nome: <input type="text" name="nome"><br>
		Telefone: <input type="text" name="telefone"><br>
		Endereço: <input type="text" name="endereco"><br>
		Número: <input type="text" name="numero"><br>
		Cidade: <input type="text" name="cidade"><br>
		Estado: <input type="text" name="estado"><br>
		País: <input type="text" name="pais"><br>
		CEP: <input type="text" name="cep"><br>
		Tipo de ensino: <input type="text" name="tipo_ensino"><br>
		Tipo de escola: <input type="text" name="tipo_escola"><br>
		<input type="submit" name="enviar">
	</form><br>
	Cadastrar Disciplina<br>
	<form action="cadastro_disciplina_exe.php" method="post">
		Nome: <input type="text" name="nome"><br>
		<input type="submit" name="enviar">
	</form><br>
	Cadastrar Professor<br>
	<form action="cadastro_professor_exe.php" method="post">
		CPF: <input type="text" name="cpf"><br>
		Nome: <input type="text" name="nome"><br>
		Telefone: <input type="text" name="telefone"><br>
		Endereço: <input type="text" name="endereco"><br>
		Número: <input type="text" name="numero"><br>
		Cidade: <input type="text" name="cidade"><br>
		Estado: <input type="text" name="estado"><br>
		País: <input type="text" name="pais"><br>
		CEP: <input type="text" name="cep"><br>
		MASP: <input type="text" name="masp"><br>
		<input type="submit" name="enviar">
	</form><br>
	Cadastrar Turma<br>
	<form action="cadastro_turma_exe.php" method="post">
		Nome: <input type="text" name="nome"><br>
		Quantidade de horários: <input type="text" name="qtd_horarios"><br>
		Turno: <input type="text" name="turno"><br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>