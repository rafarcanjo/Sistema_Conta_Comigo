<!-- Include Header -->
<?php 
	include 'structure_files/header.php';	
?>

	<!-- Container 100% -->
	
	<div class="container">
		<div class="row my-5 my-sm-2 py-5">
			<div class="col-md-6">
				<h1 class="mb-3">Situação cadastral do Portador</h1>
				<p class="pe-3">Preencha o CPF do portador abaixo para consultar a situação cadastral dele no sistemas da Conta Comigo. <span class="text-muted">Para facilitar, também mostraremos abaixo se esse portador possui alguma consulta agendada.</sapi_windows_cp_is_utf8></p>
				<form method="get" action="">
					<div class="row">
						<label class="col-form-label" for="cpf">Filtrar por Paciente:</label>
					</div>
					<div class="row">
						<div class="col-auto">
							<input type="text" class="form-control form-control-lg" placeholder="000.000.000-00" id="cpf"/>
						</div>
						<div class="col-auto">
							<button type="submit" name="btn_choosedata" value="Pesquisar" class="btn btn-outline-primary btn-lg"><i class="fas fa-search"></i> Pesquisar</button>
						</div>
					</div>
        		</form>
			</div>
		
			<div class="col-md-6">
			
				<!--CADASTRO HABILITADO--> 
				<h3 class="mb-3">Status do Cadastro</h3>
				<div class="alert alert-success" role="alert">
					<p class="fs-5 lead"><i class="fas fa-check"></i> Esse portador está habilitado.</p>
					<hr>
					Isso significa que ele poderá desfrutar de todos os benefícios da Conta Comigo.
				</div>
                <!-- -->
                
				<!--CADASTRO DESABILITADO 
				<h3 class="mb-3">Status do Cadastro</h3>
				<div class="alert alert-danger" role="alert">
					<p class="fs-5 lead"><i class="fas fa-times"></i> Infelizmente o cadastro do paciente esta inativo. </p>
					<hr>
					<p>Isso significa que ele não pode desfrutar dos benefícios da Conta Comigo.<br>Informe para o paciente, o contato do nosso SAC, para regularizarmos a situação.</p>
					<hr>
					<p class="fs-4 fs-bold">SAC Conta Comigo</p><p><i class="fas fa-phone"></i> 0800-610-5665
					<br>
					<i class="fas fa-envelope"></i> contato@contacomigo.org
					</p>

				</div>				
                <!-- -->
			</div>
		</div>
	</div>

	<div class="container bg-light rounded border py-3 px-4 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="mb-3">Informações do Portador</h2>
				<ul class="list-group list-group-horizontal-md mb-3">
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Nome:</small><br>
						<span class="text-uppercase">Antonio Jose Carlos Silva</span>
					</li>
					<li class="list-group-item flex-fill">
						<small class="fw-bold">CPF:</small><br>
						<span class="text-uppercase">098.470.629-19</span>
					</li>
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Telefone:</small><br>
						<span class="text-uppercase">(47)9.9959-6107</span>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="container bg-light rounded border py-3 px-4 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2>Resultados da Agenda</h2>
			</div>
		</div>


		<div class="row border rounded p-4 bg-white my-3">
			<div class="col-md-8 mb-3">
				<h3>Informações da consulta</h3>
				<ul class="list-group list-group-horizontal-md">
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Hospital:</small><br>
						<span class="text-uppercase">Bethesda</span>
					</li>
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Especialidade:</small><br>
						<span class="text-uppercase">Cardiologia</span>
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
					<div class="d-inline me-3"><i class="far fa-calendar-alt"></i> 22/01/2021</div>
					<div class="d-inline"><i class="far fa-clock"></i> 17:00 horas</div>
				</div>
			</div>
		</div>

		<div class="row border rounded p-4 bg-white my-3">
			<div class="col-md-8 mb-3">
				<h3>Informações da consulta</h3>
				<ul class="list-group list-group-horizontal-md">
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Hospital:</small><br>
						<span class="text-uppercase">Bethesda</span>
					</li>
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Especialidade:</small><br>
						<span class="text-uppercase">Cardiologia</span>
					</li>
					<li class="list-group-item flex-fill">
						<small class="fw-bold">Médico:</small><br>
						<span class="text-uppercase">Dr. Fábio petry</span>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Data e hora desejada</h3>
				<div class="alert alert-warning" role="alert">
					<div class="d-inline me-3"><i class="far fa-calendar-alt"></i> 22/01/2021</div>
					<div class="d-inline"><i class="far fa-clock"></i> 17:00 horas</div>
				</div>
			</div>
		</div>	
	</div>
	
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>
