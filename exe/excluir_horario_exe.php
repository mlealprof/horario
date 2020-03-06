 <?php
	require 'conexao_exe.php';

	$cod = $_GET['cod_horarios'];

	$excluir = "DELETE FROM horarios WHERE cod_horarios = '$cod'";
	if (mysqli_query($conexao, $excluir)) {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	} else {
		echo '<script type="text/javascript">
						window.location.href="../admin/index.php?tela=horario";
					</script>';
	}
?>
