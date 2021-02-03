<!DOCTYPE html>
<html>
<head>
	<!-- Include Header -->
	<?php 
		include 'structure_files/link.html';
		include 'php_files/validatelogin.php';
	?>
</head>
	<body class="bg-purple bg-overlay-worldmap"> 
		<!-- Container 100% -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2">
					<div class="bg-white rounded shadow border mt-5 py-5 px-3 mb-4">
						
						<img id="img_login" class="mx-auto d-block mb-5 img-fluid" src="img_files/Logo-Conta-Comigo-Horizontal@0.5x.png">
						<!-- Formul·rio de Login -->
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="d-grid gap-2">		
							<div>
								<label class="form-label" for="user">E-mail</label>
								<input class="form-control form-control-lg" maxlength="40" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ echo $_POST['email'];}?>" type="text" placeholder="" name="email" id="user">
								<span><?php echo $email_err;?></span>
							</div>

							<div class="mb-3">
								<label class="form-label" for="password">Senha</label>
								<input class="form-control form-control-lg" type="password" maxlength="15" name="password" id="password">
								<span><?php echo $password_err;?></span>
							</div>				
							
							<button type="submit" value="Entrar" name="btn_login" class="btn btn-primary btn-lg">Entrar</button>

						</form>

					</div>
					<div class="text-center">
						<a href="forgotpassword.php" class="mb-3 d-block text-light">Esqueci meu usu√°rio ou senha</a>	
						<a href="http://www.contacomigo.org" class="text-light">Acessar site Conta Comigo</a>
						
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>