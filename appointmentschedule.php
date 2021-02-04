<!-- Include Header -->
<?php 
	include 'structure_files/header.php';
	include 'php_files/conect.php';
	include 'php_files/validateschedule.php';
?>
		
	<!-- Search Header -->
	<div class="container">
		<div class="row my-5">
			<div class="col-md-12">
				<h1>Agenda de Consultas</h1>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-5">
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="row">
						<div class="col-auto">
							<label class="col-form-label" for="calendario">Escolha o Dia:</label>
						</div>
						<div class="col-auto">
							<input type="text" name="date_schedule" class="form-control" placeholder="DD-MM-AAAA" id="calendario"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
						<span><?php echo $date_err;?></span>
					</div>
        		</form>
			</div>
			<div class="col-md-2 text-start text-md-center py-md-0 py-3">
				<span>ou</span>
			</div>
			<div class="col-md-5">
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="row">
						<div class="col-auto">
							<label class="col-form-label" for="cpf">Filtrar por Paciente:</label>
						</div>
						<div class="col-auto">
							<input type="text" name="cpf_schedule" class="form-control" placeholder="000.000.000-00" id="cpf"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
						<span><?php ?></span>
					</div>
        		</form>
			</div>
		</div>
	</div>
	
	
	<?php	if ($_SERVER["REQUEST_METHOD"] == "POST"){ ?>
    	<!-- Search Results -->
    	<div class="container bg-light rounded border py-3 px-4 mb-5">
    		<div class="row">
    			<div class="col-md-12">
    				<h2>Resultados da Agenda</h2>
    			</div>
    			<span><?php echo $date_err2;?></span>
    		</div>
    
    		<div class="row border rounded p-4 bg-white my-3">
    			<div class="col-md-8">
    				<h3>Informações do portador</h3>
    				<ul class="list-group list-group-horizontal-md mb-3">
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Nome:</small><br>
    						<span class="text-uppercase"><?php echo $name_holder; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">CPF:</small><br>
    						<span class="text-uppercase"><?php echo $cpf_bd; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Telefone:</small><br>
    						<span class="text-uppercase"><?php echo $phone_holder; ?></span>
    					</li>
    				</ul>
    				<ul class="list-group list-group-horizontal-md">
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Hospital:</small><br>
    						<span class="text-uppercase"><?php echo $name_hospital; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Especialidade:</small><br>
    						<span class="text-uppercase"><?php echo $specialty; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Médico:</small><br>
    						<span class="text-uppercase">Dr. Fábio petry</span>
    					</li>
    				</ul>
    			</div>
    			<div class="col-md-4">
    				<h3>Data e hora desejada</h3>
    				<div class="alert alert-success" role="alert">
    					<i class="far fa-calendar-alt"></i> <?php echo $date; ?>
    					<hr>
    					<i class="far fa-clock"></i> <?php echo $start_hour; ?> horas
    				</div>
    				<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    					<button type="button" class="btn btn-outline-success" id="btn_schedule"><i class="fas fa-check"></i> Agendar</button>	
    					<button type="button" class="btn btn-outline-primary" id="btn_delay"><a href="postponeschedule.php" class="text-decoration-none text-reset"><i class="far fa-calendar-alt"></i> Adiar</a></button>
    				</div>
    				<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    					<button type="button" class="btn btn-outline-danger" id="btn_cancel"><i class="fas fa-times"></i> Cancelar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	
    <!-- Close Schedule -->
    <!-- ELSE if not results -->
	<?php 	} else {  echo "Colocar um espa�o aqui"; } ?>
	
<!-- Include Footer -->
<?php   include 'structure_files/footer.html'; ?>