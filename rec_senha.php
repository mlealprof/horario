<?php
	require("header.php");
	$cod_usuario = $_GET['cod_usuario'];
	
?>
	
<body>
	<section id="intro">

	   <form action="exe/atualizasenha.php" method="Post">
		<div class="babado-container intro-content">
		<h2>Redefinição de Senha</h2>
		Informe sua nova senha por favor!
			<input type="text" name="senha" size="50" maxlength="50" placeholder="Digite sua nova senha"><br>
			<input type="hidden" name="cod_usuario" value=<?php echo $cod_usuario;?>>
			<div>
	        	 <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
	      </div>
	    </div>
       </form>
	</section>    
</body>
<?php
	require("footer.php");
?>