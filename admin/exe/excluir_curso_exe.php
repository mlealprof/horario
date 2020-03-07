<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_tipo_ensino'];

	$excluir = "DELETE FROM tipo_ensino WHERE cod_tipo_ensino = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=curso";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=curso";
					</script>';
	}
?>
