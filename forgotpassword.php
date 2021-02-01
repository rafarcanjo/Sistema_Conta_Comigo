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
		
		<!-- Alterar Senha Box -->
		<div class="box_1">				
		<div class="spacer_2"></div>
		
			<!-- Logo Conta Comigo -->
			<div>
				<p>Por questões de seguranca, não é permitido alterar sua senha.<br/><br/> 
					Preencha o formulario abaixo e a equipe Conta Comigo entrará em contato pelo email / telefone, informado abaixo.
				</p>
			</div>
			
			<!-- Login Form -->
			<form method="get" action="changesubmitted.php">
				
				<input type="text" placeholder=" Nome" name="login">
				<div class="spacer_1"></div>
				
				<input type="text" placeholder=" Email" name="email">
				<div class="spacer_1"></div>
				
				<input type="number" placeholder=" Telefone" name="telephone">
				<div class="spacer_1"></div>

				<input type="text" placeholder=" Empresa (nome do hospital, clínica, etc)" name="company">

				<div class="spacer_1"></div>
				
				<input type="submit"  value="Enviar" name="btn_changepassword" class="btn"><br/>
			</form>
		</div>	
		<div class="spacer_7"></div>
		 
		<!-- Box Footer -->
		<div class="box_footer">
			<div class="link_footer"><a href="index.php">Voltar para a tela de login</a></div>
		</div>
	</div>
</body>
</html>