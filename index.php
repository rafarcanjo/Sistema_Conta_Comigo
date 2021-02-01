<!DOCTYPE html>
<html>
<head>
	<!-- Include Header -->
	<?php 
		include 'structure_files/link.html';	
	?>
</head>
<body>
	<!-- Container 100% -->
	<div class="container_login">			
		<div class="spacer_7"></div>
				
		<!-- Login Box -->
		<div class="box_1">				
			<div class="spacer_4"></div>
			
			<!-- Logo Conta Comigo -->
			<div><img id="img_login" src="img_files/Logo-Conta-Comigo-Vertical.png"></div>						
			<div class="spacer_3"></div>
			
			<!-- Login Form -->
			<form method="get" action="home.php">		
					
				<input type="text" placeholder=" Usuario" name="login">				
				<div class="spacer_2"></div>
								
				<input type="password" placeholder=" Senha" name="password">				
				<div class="spacer_2"></div>
				
				<input type="submit" value="Entrar" name="btn_login" class="btn"><br/>
			</form>
		</div>			
		<div class="spacer_7"></div>
		 
		<!-- Box Footer -->
		<div class="box_footer">				
			<div class="link_footer"><a href="http://www.contacomigo.org">Acessar site Conta Comigo</a></div>
			<div class="link_footer"><a href="forgotpassword.php">Esqueci meu Usuario ou Senha</a></div>
		</div>
	</div>
</body>
</html>