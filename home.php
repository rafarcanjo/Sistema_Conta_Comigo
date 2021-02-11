<!-- Include Header -->
<?php 
	include 'structure_files/header.php';	
?>	

<div class="container-fluid	 bg-light">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mb-5">Sistema Online Conta Comigo</h1>
			</div>
		</div>

		<!-- Box Schedule -->
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<div class="bg-white border rounded shadow p-5 text-center mb-4 d-grid gap-2">
					<h2><label class="label_1">Agenda de Consultas</label></h2>
					
					<!-- Calendar Icon -->
					<div class="d-md-block d-sm-none d-none m-4">
						<i class="far fa-calendar-alt fa-6x"></i>
					</div>
					<div class="d-sm-block d-md-none m-4">
						<i class="far fa-calendar-alt fa-4x"></i>
					</div>
					
					<!-- Button Schedules -->
					<a href="appointmentschedule.php" style="text-decoration: none;" type="submit" class="btn btn-primary btn-lg">Consultar Agenda</a>
				</div>
			</div>

			<!-- Box Register -->
			<div class="col-lg-5 col-md-5">
				<div class="bg-white border rounded shadow p-5 text-center mb-4 d-grid gap-2">
					<h2><label class="label_1">Situação Cadastral do Portador</label></h2>
					
					<!-- User Check Icon -->
					<div class="d-md-block d-sm-none d-none m-3">
						<i class="fa fa-user-check fa-5x"></i>
					</div>
					<div class="d-sm-block d-md-none m-4">
						<i class="fa fa-user-check fa-4x"></i>
					</div>
					
					<!-- Button Registers -->
					<a href="portadorconsultation.php" class="btn btn-primary btn-lg" type="submit">Consultar portador</a>
				</div>
			</div>
		</div>
	</div>
	<div><br><br><br></div>
</div>

<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>