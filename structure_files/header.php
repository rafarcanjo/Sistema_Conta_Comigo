<!DOCTYPE html>
<html>
<head>
	<!-- Include Header -->
	<?php 
		include 'structure_files/link.html';
		//and (!isset ($_SESSION['password']) == true)
        
		session_start();
		if((!isset ($_SESSION['autenticado']) == true))
		{
		    unset($_SESSION['email']);
		    unset($_SESSION['password']);
		    header('location: http://www.app.contacomigo.org/index.php');
		}
		else{
		  $logado = $_SESSION['email'];
		}
	?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow border-bottom">
		<div class="container">
		  	<a class="navbar-brand" href="home.php"><img id="logo_contacomigo" src="img_files/Logo-Conta-Comigo-Horizontal@0.5x.png"></a>
		  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="home.php">Página Inicial</a>
					</li>
				</ul>
				<div class="d-flex">
					<!-- Corporation name -->
					<div class="d-inline pt-1">
						<span class="me-2 text-muted"><?php echo $logado; ?></span>
					</div>

					<!-- Health logo -->
					<div class="d-inline">
						<a href="http://www.app.contacomigo.org/php_files/logout.php"><i class="fas fa-briefcase fa-2x text-muted"></i></a>
					</div>
				</div>
		  	</div>
		</div>
	</nav>