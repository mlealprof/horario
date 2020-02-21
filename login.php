<?php
	require("header.php");
	
?>
	
<body>
	<section id="intro">
	   <form action="exe/login_exe.php" method="Post">
		<div class="babado-container intro-content">
			Usuário
			<input type="text" name="email" size="20" maxlength="50" placeholder="Digite seu usuário"><br>
			
			 <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" maxlength="50" placeholder="Digite sua senha" > 
			<a href="">Esqueceu sua senha?</a><br>
			<div>
	        	 <button type="submit" class="btn btn-primary">Entrar</button>
	        	<a href="#portfolio" class="btn-projects scrollto" >Cadastrar</a>
	      </div>
	    </div>
       </form>
	</section>    
</body>
<?php
	require("footer.php");
?>