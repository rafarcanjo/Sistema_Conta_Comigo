<!-- Include Header -->
<?php 
	include 'structure_files/header.php';	
?>	

<!-- UPLOAD -> HOME + SCHEDULE + SELECT SPECIALTY + SELECT DOC + SELECT HOUR + LINK + CONECT + VALIDATE SCHEDULE + VALIDATE CPF(VALIDATION) + FUNC JS -->

<div class="container-fluid	 bg-white">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mb-5">Sistema Online Conta Comigo</h1>
			</div>
		</div>

		<!-- Box Schedule -->
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="bg-white border rounded shadow p-4 text-center mb-4 d-grid gap-2">
					<h2><label class="label_1">Agendamentos</label></h2>
					
					<!-- Calendar Icon -->
					<div class="d-md-block d-sm-none d-none m-3">
						<i class="far fa-calendar-alt fa-4x"></i>
					</div>
					<div class="d-sm-block d-md-none m-3">
						<i class="far fa-calendar-alt fa-3x"></i>
					</div>
					
					<!-- Button Schedules -->
					<a href="appointmentschedule.php" style="text-decoration: none;" type="submit" class="btn btn-primary btn-lg">Ver Agenda</a>
				</div>
			</div>

			<!-- Box Register -->
			<div class="col-lg-4 col-md-4">
				<div class="bg-white border rounded shadow p-4 text-center mb-4 d-grid gap-2">
					<h2><label class="label_1">Verificar Portador</label></h2>
					
					<!-- User Check Icon -->
					<div class="d-md-block d-sm-none d-none m-3">
						<i class="fa fa-user-check fa-4x"></i>
					</div>
					<div class="d-sm-block d-md-none m-3">
						<i class="fa fa-user-check fa-3x"></i>
					</div>
					
					<!-- Button Registers -->
					<a href="portadorconsultation.php" class="btn btn-primary btn-lg" type="submit">Verificar portador</a>
				</div>
			</div>
			
			<!-- Box Register -->
			<div class="col-lg-4 col-md-4">
				<div class="bg-white border rounded shadow p-4 text-center mb-4 d-grid gap-2">
					<h2><label class="label_1">Nova Consulta</label></h2>
					
					<!-- User Icon -->
					<div class="d-md-block d-sm-none d-none m-3">
						<i class="fas fa-stethoscope fa-4x"></i>
					</div>
					<div class="d-sm-block d-md-none m-3">
						<i class="fas fa-stethoscope fa-3x"></i>
					</div>
					
					<!-- Button Registers -->
					<a href="schedule.php" class="btn btn-primary btn-lg" type="submit">Agendar Consulta</a>
				</div>
			</div>
		</div>
	</div>
	<div><br><br><br></div>
</div>

<div class="row">
    <div class="col-12 position-fixed bottom-0 start-0">	
    <!-- Include Footer -->
    <?php   include 'structure_files/footer.html'; ?>
    </div>
</div>