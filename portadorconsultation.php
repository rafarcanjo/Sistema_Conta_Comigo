<!-- Include Header -->
<?php 
	include 'structure_files/header.html';	
?>

	<!-- Container 100% -->
	<div class="container_system">
	<div class="spacer_2"></div><div class="vspacer_4"></div><div class="vspacer_2"></div>

	
		<!-- Label Div -->
		<div class="box_3">
			<h2>Preencha o CPF do portador abaixo para<br/> consultar sua situação cadastral</h2>
			<div class="spacer_2"></div>
			
			<!-- CPF Input Form -->
			<form method="get" action="">
				<label class="label_2">CPF do portador:</label><br/><br/>
				<input type="number" placeholder=" 999.999.999-99" name="cpf_portador" class="input_2">
				
				<div class="vspacer_2"></div>
				<input type="submit" maxlength="14" value="Pesquisar" name="btn_cpf" class="btn_2"><br/>
			</form>
		</div>
		
		<!-- Status Div -->
		<div class="box_3">
			<div class="spacer_5"></div><div class="vspacer_5"></div>
			<div class="box_4">
				<label>Status do<br/>Cadastro</label>
			</div>	
		</div>
		
		<!-- Schedules Div -->
		<div>
		</div>
	</div>	
	<div class="spacer_6"></div>
	
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>