<?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_professor'];

	$excluir = "DELETE FROM professor WHERE cod_professor = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						alert("Registro apagado!");
						window.location.href="../admin/index.php?tela=professor";
					</script>';
	} else {
		echo '<script type="text/javascript">
						alert("Falha");
						window.location.href="../admin/index.php?tela=professor";
					</script>';
	}
?>
