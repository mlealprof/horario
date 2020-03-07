<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_turma'];

	$excluir = "DELETE FROM turma WHERE cod_turma = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=turma";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=turma";
					</script>';
	}
?>
