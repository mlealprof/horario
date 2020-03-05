<?php
	require("header.php");
	
?>
	
<body>
	<section id="intro">

	   <form action="exe/login_exe.php" method="Post">
		<div class="babado-container intro-content font">
<<<<<<< HEAD
		<h2>Digite seu Email</h2>
		Informe o Email cadastrado e enviaremos sua senha temporaria.
=======
		<h2>Recuperação de senha:</h2>
		<p>Informe o Email cadastrado e enviaremos sua senha temporaria.</p>
>>>>>>> upstream/master
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
