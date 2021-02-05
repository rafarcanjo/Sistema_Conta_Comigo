<!-- Include Header -->
<?php 
	include 'structure_files/header.php';	
?>

	<!-- Container 100% -->
	
	<div class="container">
		<div class="row my-5 my-sm-2">
			<div class="col-md-6">
                <h1 class="mb-3">Adiar consulta do paciente</h1>
                <p>Ao adiar uma consulta, o portador irá receber uma mensagem do qual permitirá que ele aceite ou não o adiamento. Tudo de forma digital e prática!</p>
			</div>
		</div>
		<div class="row mb-3 align-items-center">
			<div class="col-md-12 mb-5">
                <h2 class="mb-4">Escolha uma data e horário</h2>
                <form method="get">
                    <div class="row g-3">

                        <!-- Big Calendar -->
                        <div class="col-md-3">
                            <div class="" id="calendario"></div>
                        </div>

                        <!-- Hour Select and Submit-->
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <select name="hour_schedule" id="hour_schedule" class="form-select">
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                </select>
                                <label for="hour_schedule" class="form-label">Escolha um Horário</label>                        
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary" value="Remarcar"><i class="far fa-calendar-alt"></i>  Remarcar</button>
                        </div>
                    </div>
                </form>        
			</div>
			
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <a class="btn btn-outline-secondary"><i class="fas fa-angle-left"></i> Cancelar adiamento</a> 
			</div>
        </div>
	</div>

	
	
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>