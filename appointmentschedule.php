<!-- Include Header -->
<?php 
	include 'structure_files/header.html';	
?>

	<!-- Container 100% -->
	<div class="container_system">
        
        <!-- CPF input + CPF Status -> Row 1 -->
        <div class="box_7">
        <div class="spacer_2"></div>
        
        	<!-- Choose Data -->
        	<div class="box_4">
        		<!-- Month/Day Filter -->
        		<form method="get" action="">
        			<div class= "cell_2">
        				<label class="label_2">Escolha o Dia:</label>
        			</div>
        			<div class="cell_1">
            			<input type="text" class="input_2" placeholder=" 99/99/9999" id="calendario"/>
        			</div>
        			<div class="cell_1">
        				<div class="vspacer_1"></div>
            			<input type="submit" name="btn_choosedata" value="Pesquisar" class="btn_2"/>
        			</div>
        		</form>
        	</div>
        	
        	<!-- Input CPF -->
        	<div class="box_4">
        		<!-- Month/Day Filter -->
        		<form method="get" action="">
        			<div class= "cell_2">
        				<label class="label_2">Filtrar por Paciente</label>
        			</div>
        			<div class="cell_1">
            			<input type="text" class="input_2" placeholder=" 999.999.999-99"/>
        			</div>
        			<div class="cell_1">
        				<div class="vspacer_1"></div>
            			<input type="submit" name="btn_choosedata" value="Pesquisar" class="btn_2"/>
        			</div>
        		</form>
        	</div>
		</div>
		
		<!-- Scheduled Appointments -> Row -->
        <div class="box_3"><hr>
        <div class="spacer_2"></div>
        
        	<!-- Pacient Information -->
        	<div class="box_5">        	
        		<!-- Name Cell -->
        		<div class="cell_1">
        			<label class="label_2">Nome do Portador:</label><br/>
        			<p>Antonio Jose Carlos Silva</p>
        		</div>
        		<!-- CPF Cell -->
        		<div class="cell_1">
        			<label class="label_2">CPF:</label><br/>
        			<p>098.470.629-19</p>
        		</div>
        		<!-- Contato Cell -->
        		<div class="cell_1">
        			<label class="label_2">Telefone</label><br/>
        			<p>(47)9.9959-6107</p>
        		</div>        		
        	</div>
        	
        	<!-- Schedule Information -->
        	<div class="box_5">        	
        		<!-- Name Cell -->
        		<div class="cell_1">
        			<label class="label_2">Hospital:</label><br/>
        			<p>Bethesda</p>
        		</div>
        		<!-- CPF Cell -->
        		<div class="cell_1">
        			<label class="label_2">Especialidade:</label><br/>
        			<p>Cardiologia</p>
        		</div>
        		<!-- Contato Cell -->
        		<div class="cell_1">
        			<label class="label_2">M&eacute;dico:</label><br/>
        			<p>Dr. Fabio Petry</p>
        		</div>        		
        	</div>        	
        	
        	<!-- Status Div -->
        	<div class="box_5">
        	
        		<!-- Schedule date/time -->
        		<div style="height: 100px;">
    			<div class="box_6">
        			<label>22/01/2021</label><br/>
        			<label>17:00 horas</label>
    			</div>
        		</div>	
        		
        		<!-- Buttons Actions -->
        		<div>
        		<div class="spacer_3"></div>
        			<button id="btn_schedule">Agendar</button>
        			<a href="postponeschedule.php" style="text-decoration: none;"><button id="btn_delay">Adiar</button></a>
        			<button id="btn_cancel">Cancelar</button>
        		</div>
        	</div>
        </div>
	</div>
	
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>