<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_disciplina'];

	$excluir = "DELETE FROM disciplina WHERE cod_disciplina = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=disciplina";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=disciplina";
					</script>';
	}
?>
