<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_disciplina_por_turma'];

	$excluir = "DELETE FROM disciplina_por_turma WHERE cod_disciplina_por_turma = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=disciplina_turma";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=disciplina_turma";
					</script>';
	}
?>
