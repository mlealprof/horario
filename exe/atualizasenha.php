<?php
$cod_usuario = $_POST['cod_usuario'];
$senha = $_POST['senha'];

$consulta = "UPDATE usuario SET senha ='$senha' where cod_usuario='$cod_usuario'";
$resultado = mysqli_query($conexao, $consulta);
alert("Senha alterada");
?>