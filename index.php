<!DOCTYPE html>
<html>
<head>
	<!-- Include Header -->
	<?php 
		include 'structure_files/link.html';	
	?>
</head>
	<body class="bg-purple bg-overlay-worldmap"> 
		<!-- Container 100% -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2">
					<div class="bg-white rounded shadow border mt-5 py-5 px-3 mb-4">
						
						<img id="img_login" class="mx-auto d-block mb-5 img-fluid" src="img_files/Logo-Conta-Comigo-Horizontal@0.5x.png">
						
						<form method="get" action="home.php" class="d-grid gap-2">		
							<div>
								<label class="form-label" for="user">E-mail</label>
								<input class="form-control form-control-lg" type="text" placeholder="" name="login" id="user">
							</div>

							<div class="mb-3">
								<label class="form-label" for="password">Senha</label>
								<input class="form-control form-control-lg" type="password" name="password" id="password">
							</div>				
							
							<button type="submit" value="Entrar" name="btn_login" class="btn btn-primary btn-lg">Entrar</button>

						</form>

					</div>
					<div class="text-center">
						<a href="forgotpassword.php" class="mb-3 d-block text-light">Esqueci meu usuário ou senha</a>	
						<a href="http://www.contacomigo.org" class="text-light">Acessar site Conta Comigo</a>
						
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>