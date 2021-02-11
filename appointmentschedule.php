<!-- Include Header -->
<?php 
	include 'structure_files/header.php';
	include 'php_files/conect.php';
	include 'php_files/validateschedule.php';
?>
		
	<!-- Search Header -->
	<div class="container">
		<div class="row mt-5 mb-3">
			<div class="col-md-12">
				<h1>Agenda de Consultas</h1>
				<p>Escolha entre filtrar pela Data ou pelo CPF do paciente.</p>
			</div>
		</div>
		<div class="row mb-5 align-items-center">
			<div class="col-md-6">
				<form method="post" autocomplete="off" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="row align-items-end">
						<div class="col-auto">
							<label class="form-label" for="date_schedule">Escolha o Dia:</label>
						
							<input type="text" name="date_schedule" class="form-control" placeholder="DD-MM-AAAA" id="calendario"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
						<span><?php echo $date_err;?></span>
					</div>
        		</form>
			</div>
			<div class="col-md-6">
				<form method="post" autocomplete="off" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="row align-items-end">
						<div class="col-auto">
							<label class="col-form-label" for="cpf">Filtrar por Paciente:</label>
						
							<input type="text" name="cpf_schedule" class="form-control" placeholder="000.000.000-00" id="cpf"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
						<span><?php echo $cpf_err;?></span>
					</div>
        		</form>
			</div>
		</div>
	</div>
	
	
	<?php	if (($_SERVER["REQUEST_METHOD"] == "POST")&&((!empty($_POST["date_schedule"]))||(!empty($_POST["cpf_schedule"])))){ ?>
    	<!-- Search Results -->
    	<div class="container bg-light rounded border py-3 px-4 mb-5">
    		<div class="row">
    			<div class="col-md-12">
    				<h2>Resultados da Agenda</h2>
    			</div>
    			<span><?php echo $date_err2;?></span>
    			
    		<!-- Start While Show Schedules -->
    		<?php while($count > 0){ ?>
    		<div class="row border rounded p-4 bg-white my-3">
    			<div class="col-md-8">
    				<h3>Informações do portador</h3>
    				<ul class="list-group list-group-horizontal-md mb-3">
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Nome:</small><br>
    						<span class="text-uppercase"><?php echo $name_holder[$count]; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">CPF:</small><br>
    						<span class="text-uppercase"><?php echo $cpf_bd[$count]; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Telefone:</small><br>
    						<span class="text-uppercase"><?php echo $phone_holder[$count]; ?></span>
    					</li>
    				</ul>
    				<ul class="list-group list-group-horizontal-md">
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Hospital:</small><br>
    						<span class="text-uppercase"><?php echo $name_hospital[$count]; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Especialidade:</small><br>
    						<span class="text-uppercase"><?php echo $specialty[$count]; ?></span>
    					</li>
    					<li class="list-group-item flex-fill">
    						<small class="fw-bold">Médico:</small><br>
    						<span class="text-uppercase"><?php echo $name_doctor[$count]; ?></span>
    					</li>
    				</ul>
    			</div>
    			<div class="col-md-4">
    				<h3>Data e hora desejada</h3>
    				<?php 
    				    if($is_confirmed[$count]==0){ echo" <div class='alert alert-danger' role='alert'>" ;}else{}
    				    if($is_confirmed[$count]==1){ echo" <div class='alert alert-success' role='alert'>" ;}else{}
    				    if($is_confirmed[$count]==2){ echo" <div class='alert alert-warning' role='alert'>" ;}else{}
                    ?>
                    	<i class="far fa-calendar-alt"></i> <?php echo $date[$count]; ?>
    					<hr>
    					<i class="far fa-clock"></i> <?php echo $start_hour[$count]; ?> horas
    				</div>
    				<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    					<button type="button" class="btn btn-outline-success" id="btn_schedule"><i class="fas fa-check"></i> Agendar</button>	
    					<button type="button" class="btn btn-outline-warning" id="btn_delay"><a href="postponeschedule.php" class="text-decoration-none text-reset"><i class="far fa-calendar-alt"></i> Adiar</a></button>
    				</div>
    				<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    					<button type="button" class="btn btn-outline-danger" id="btn_cancel"><i class="fas fa-times"></i> Cancelar</button>
    				</div>
    			</div>
    		</div>
            <!-- Close Schedule -->
            <!-- ELSE if not results -->
        	<?php $count--;}} else { } ?>
        	</div>
		</div>
		
<div class="row">
    <div class="col-12 position-fixed bottom-0 start-0">	
    <!-- Include Footer -->
    <?php   include 'structure_files/footer.html'; ?>
    </div>
</div>