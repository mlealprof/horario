<?php
	require("header.php");
	
?>
	
<body>
	<section id="intro">

	   <form action="exe/login_exe.php" method="Post">
		<div class="babado-container intro-content">
		<h2>Digite seu Email</h2>
		Informe o Email cadastrado e enviaremos sua senha temporaria.
			<input type="text" name="email" size="50" maxlength="50" placeholder="Digite seu email"><br>
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