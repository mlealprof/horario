<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_usuario'];

	$excluir = "DELETE FROM usuario WHERE cod_usuario = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=usuario";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=usuario";
					</script>';
	}
?>
