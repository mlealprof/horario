<?php
	require("header.php");
	
?>
	
<body>
	<section id="intro">

	   <form action="exe/login_exe.php" method="Post">
		<div class="babado-container intro-content font">


  	<h2>Recuperação de senha:</h2>


		<p>Informe o Email cadastrado e enviaremos uma senha temporaria.</p>


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
