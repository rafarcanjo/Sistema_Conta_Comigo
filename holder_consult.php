<!-- Include Header -->
<?php 
	include 'structure_files/header.php';
	include 'structure_files/conect.php';
	include 'php_files/holder/validate_cpf.php';
?>

	<!-- Container 100% -->
	
	<div class="container">
		<div class="row my-5 my-sm-2 py-5">
			<div class="col-md-6">
				<h1 class="mb-3">Situação cadastral do Portador</h1>
				<p class="pe-3">Preencha o CPF do portador abaixo para consultar a situação cadastral dele no sistemas da Conta Comigo. <span class="text-muted">Para facilitar, também mostraremos abaixo se esse portador possui alguma consulta agendada.</sapi_windows_cp_is_utf8></p>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="row">
						<label class="col-form-label" for="cpf">Filtrar por Paciente:</label>
					</div>
					<div class="row">
						<div class="col-auto">
							<input type="text" name="cpf_schedule" maxlength="14" autocomplete="off" class="form-control form-control-lg" placeholder="000.000.000-00" id="cpf" onblur="validarDados('cpf', document.getElementById('cpf').value);"/>
							<div id="campo_cpf"> </div> <br />
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary btn-lg"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
					</div>
        		</form>
    			<span><?php echo $cpf_err;?></span>
			</div>
		
			<div class="col-md-6">
			
			<?php
			if(($_SERVER["REQUEST_METHOD"] == "POST")&&((!empty($_POST["cpf_schedule"])))){
    			    if(isset($contacomigo)){
        			    echo "
        				<!--CADASTRO HABILITADO--> 
        				<h3 class='mb-3'>Status do Cadastro</h3>
        				<div class='alert alert-success' role='alert'>
        					<p class='fs-5 lead'><i class='fas fa-check'></i> Esse portador está habilitado.</p>
        					<hr>
        					Isso significa que ele poderá desfrutar de todos os benefícios da Conta Comigo.<br/>
    
        				</div>";
			?>
			</div>
		</div>
	</div>
	
	<?php if($total_schedule>0){ ?>
	<div class="container bg-light rounded border py-3 px-4 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="mb-3">Informações do Portador</h2>
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
			</div>
		</div>
	</div>


	<div class="container bg-light rounded border py-3 px-4 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2>Resultados da Agenda</h2><br/>
			</div>
		</div>

        <!-- Start While Show Schedules -->
    	<?php while($count > 0){ ?>
		<div class="row border rounded p-4 bg-white my-3">
			<div class="col-md-8 mb-3">
    			<h3>Informações da consulta</h3>
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
    			    if($is_confirmed[$count]==1){ echo" <div class='alert alert-success' role='alert'>" ;}else{}
    			    if($is_confirmed[$count]==2){ echo" <div class='alert alert-warning' role='alert'>" ;}else{}
    			    if($is_confirmed[$count]==3){ echo" <div class='alert alert-danger' role='alert'>" ;}else{}
                ?>
					<div class="d-inline me-3"><i class="far fa-calendar-alt"></i> <?php echo $date[$count]; ?></div>
					<div class="d-inline"><i class="far fa-clock"></i> <?php echo $start_hour[$count]; ?></div>
				</div>
			</div>
		</div>
	 <?php
                        $count--;
                    //Close While
        			}
    			//Close if Total Schedule
			    } else {  } 			    
		    //Close IF HAVE POST
		    }else{
                echo "
            	<!--CADASTRO DESABILITADO -->
            	<h3 class='mb-3'>Status do Cadastro</h3>
            	<div class='alert alert-danger' role='alert'>
            		<p class='fs-5 lead'><i class='fas fa-times'></i> Infelizmente o cadastro do paciente esta inativo. </p>
            		<hr>
            		<p>Isso significa que ele não pode desfrutar dos benefícios da Conta Comigo.<br>Informe para o paciente, o contato do nosso SAC, para regularizarmos a situação.</p>
            		<hr>
            		<p class='fs-4 fs-bold'>SAC Conta Comigo</p><p><i class='fas fa-phone'></i> 0800-610-5665
            		<br>
            		<i class='fas fa-envelope'></i> contato@contacomigo.org
            		</p>
            	</div>";}
        }else { }
    ?>
    
<script>
	const cpf = document.querySelector("#cpf");
    cpf.addEventListener("keyup", () => {
      let value = cpf.value.replace(/[^0-9]/g, "").replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");
      
      cpf.value = value;
    });
</script>
	
<div class="row">
    <div class="col-12 position-fixed bottom-0 start-0">	
    <!-- Include Footer -->
    <?php   include 'structure_files/footer.html'; ?>
    </div>
</div>