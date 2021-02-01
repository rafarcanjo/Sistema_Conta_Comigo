<!-- Include Header -->
<?php 
	include 'structure_files/header.html';	
?>	

	<!-- Container 100% -->
	<div class="container_system">
	<div class="spacer_6"></div><div class="spacer_2"></div>
	<div class="vspacer_6"></div><div class="vspacer_2"></div>
		
		<!-- Box Schedule -->
		<div class="box_2">
			<label class="label_1">Agenda de<br/> Consultas</label>
			
			<!-- Image Box Schedule -->
			<img id="img_schedule" src="img_files/schedule.png">
			
			<!-- Button Schedules -->
			<button type="submit" class="btn" value="Consultar Agenda" formaction="">Consultar Agenda</button>
		</div>
		<div class="vspacer_3"></div>
		
		<!-- Box Register -->
		<div class="box_2">
			<label class="label_1">Situação Cadastral<br/> do Portador</label>
			
			<!-- Image Box Register -->
			<img id="img_register" src="img_files/paciente.png">
			
			<!-- Button Registers -->
			<a href="portadorconsultation.php" style="text-decoration: none;" type="submit"><button class="btn">Consultar Portador</button></a>
		</div>
	</div>	
	<div class="spacer_6"></div><div class="spacer_1"></div>
		
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>