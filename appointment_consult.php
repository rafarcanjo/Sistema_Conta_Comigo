<!-- Include Header -->
<?php 
    include 'structure_files/header.php';
    include 'structure_files/conect.php';
	include 'php_files/appointments/validate_schedule.php';
	//include 'php_files/appointments/change_schedule.php';
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
						
							<input type="text" name="date_schedule" class="form-control" value = "<?php if (($_SERVER["REQUEST_METHOD"] == "POST")&&(!empty($_POST["date_schedule"]))){ echo $_POST['date_schedule'];}?>"  placeholder="DD-MM-AAAA" id="calendario"/>
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
						
							<input type="text" name="cpf_schedule" class="form-control" value = "<?php if (($_SERVER["REQUEST_METHOD"] == "POST")&&(!empty($_POST["cpf_schedule"]))){ echo $_POST['cpf_schedule'];}?>" placeholder="000.000.000-00" maxlength="14" id="cpf" onblur="validarCpf('cpf', document.getElementById('cpf').value);"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
						<div id="campo_cpf"><?php echo $cpf_err;?> </div> <br />
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
    		
			<?php 
			     if($total_schedule>0){
    		           while($count > 0){ 
            ?>
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
    				    if($is_confirmed[$count]==1){ echo" <div class='alert alert-success' role='alert'>" ;}else{}
    				    if($is_confirmed[$count]==2){ echo" <div class='alert alert-warning' role='alert'>" ;}else{}
    				    if($is_confirmed[$count]==3){ echo" <div class='alert alert-danger' role='alert'>" ;}else{}
                    ?>
                    	<i class="far fa-calendar-alt"></i> <?php echo $date[$count]; ?>
    					<hr>
    					<i class="far fa-clock"></i> <?php echo $start_hour[$count]; ?> horas
    				</div>
    				<form name="form_action" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        				<div class="btn-group" role="group" aria-label="Basic mixed styles example">
        					<a class="btn btn-outline-success" name="<?php echo $id_appointment[$count]; ?>" id="<?php echo "btn_schedule".$count; ?>" onclick="confirmaAgenda(this.name,this.id)"><i class="fas fa-check"></i> Agendar</a>	
        					<a class="btn btn-outline-warning" name="<?php echo $id_appointment[$count]; ?>" id="<?php echo "btn_porstpone".$count; ?>" onclick="adiaAgenda(this.name,this.id)"><i class="far fa-calendar-alt"></i> Adiar</a>
        					<a class="btn btn-outline-danger" name="<?php echo $id_appointment[$count]; ?>" id="<?php echo "btn_cancel".$count; ?>" onclick="cancelaAgenda(this.name,this.id)"><i class="fas fa-times"></i> Cancelar</a>
        				</div>
    				</form>
    			</div>
    		</div>
            <!-- Close Schedule -->
            <!-- ELSE if not results -->
        	<?php 
        	               $count--;
        	           //Close While
	                   }
	              //Close if Total Schedule
			     } else {  } 
		    //Close IF HAVE POST
            } else { } 
            ?>
        	
        	</div>
		
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

<script>
//Agendar
        function confirmaAgenda(id_appointment,btn_schedule){
    		$.ajax({
    			url: 'php_files/appointments/change_schedule.php',
    			type: 'POST',
    			data:{idAppointment:id_appointment},
    			
    			beforeSend: function(){
    				$("#"+btn_schedule).html("Carregando");
    			},                			
    			success: function(data){
    				$("#"+btn_schedule).html("Agendado");

    			},
    			error: function(data){
    				$("#"+btn_schedule).html("Erro");
    			},
    		})
        }

//Adiar
        function adiaAgenda(id_appointment,btn_porstpone){
     		$.ajax({
        			url: 'php_files/appointments/change_porstpone.php',
        			type: 'POST',
        			data:{idAppointment:id_appointment},
        			
        			beforeSend: function(){
        				$("#"+btn_porstpone).html("Carregando");
        			},                			
        			success: function(data){
        				$("#"+btn_porstpone).html("Adiado");
        			},
        			error: function(data){
        				$("#"+btn_porstpone).html("Erro");
        			},
        		})
        }
        
        
//Cancelar
        function cancelaAgenda(id_appointment,btn_cancel){
    		$.ajax({
    			url: 'php_files/appointments/change_cancel.php',
    			type: 'POST',
    			data:{idAppointment:id_appointment},
    			
    			beforeSend: function(){
    				$("#"+btn_cancel).html("Carregando");
    			},                			
    			success: function(data){
    				$("#"+btn_cancel).html("Cancelado");
    			},
    			error: function(data){
    				$("#"+btn_cancel).html("Erro");
    			},
    		})
        }
</script>