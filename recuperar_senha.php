<?php
	require("header.php");
	
?>
	
<body>
	<section id="intro">
	   <form action="exe/recuperar_senha_exe.php" method="Post">
		<div class="babado-container intro-content">
			Email
			<input type="text" name="email" size="20" maxlength="50" placeholder="Digite seu usuário"><br>
			<div>
	        	 <button type="submit" class="btn btn-primary">Entrar</button>
	      </div>
	    </div>
       </form>
	</section>    
</body>
<?php
	require("footer.php");
?>