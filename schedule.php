<!-- Include Header -->
<?php 
	include 'structure_files/header.php';
	include 'structure_files/conect.php';
?>

<!-- Schedule Form -->
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1 class="mt-5">Agende sua consulta:</h1><br/>
	</div>
		<div class="col-md-4">    
		<form name="insert_schedule" method="post" action="php_files/schedule/insertschedule.php">            
            <!-- Hospitais -->
            <label>Hospital:</label><br/>
            <select name="hospital" id="hospital" class="form-select">
            	<option value="0" selected disabled>Selecionar...</option>
            	<?php 
            	   $selecthospital = $conexao->prepare("SELECT * from company");
            	   $selecthospital->execute();
            	   $fetchAll = $selecthospital->fetchAll();
            	   foreach ($fetchAll as $hospital){
            	       if($hospital['has_doctors'] != 0){
            	           echo '<option value="'.$hospital['id_company'].'">'.$hospital['company_name'].'</option>';
            	       }
            	   }                	
            	?>
            </select><br/>
			
            <label id="specialty_label" style="display:none">Especialidade:</label>
			<select name="specialty" id="specialty" style="display:none" class="form-select">
			</select><br/>

			<label id="doctors_label" style="display:none">Doutor:</label>				                           
			<select name="doctors" id="doctors" style="display:none" class="form-select">
			</select><br/>
			
			<label id="date_label" style="display:none">Data:</label>				                           
			<select name="date" id="date" style="display:none" class="form-select" onchange="setTextField(this)">
			</select><br/>
				<input id="date_text" type = "hidden" name = "date_text" value = "" />
                <script type="text/javascript">
                    function setTextField(ddl) {
                        document.getElementById('date_text').value = ddl.options[ddl.selectedIndex].text;
                    }
                </script>
			
			<label id="hour_label" style="display:none">Hora:</label>				                           
			<select name="hour" id="hour" style="display:none" class="form-select">
			</select><br/>

			<label id="cpf_label" style="display:none">CPF:</label>				                           
			<input class="form-control" maxlength="14" type="text" autocomplete="off" placeholder="999.999.999-99" name="cpf" id="cpf" style="display:none" onblur="validarDados('cpf', document.getElementById('cpf').value);">
			<div id="campo_cpf"> </div> <br />

			<button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule" style="display:none" class="btn btn-primary">Agendar</button><br />
		</form>					
		</div>
	</div>
</div>

<div class="row">
    <div class="col-12 position-fixed bottom-0 start-0">	
    <!-- Include Footer -->
    <?php   include 'structure_files/footer.html'; ?>
    </div>
</div>
	<script>
		////SPECIALTY
		$("#hospital").on("change",function(){
    		var idHospital = $("#hospital").val();
    		
			$.ajax({
    			url: 'php_files/schedule/selectspecialty.php',
    			type: 'POST',
    			data:{id1:idHospital},
    			beforeSend: function(){
    				$("#specialty").css({'display':'block'});
    				$("#specialty_label").css({'display':'block'});
    				$("#specialty").html("Carregando...");
    				
    				$("#doctors").html("value=");
    				$("#date").html("value=");
    				$("#hour").html("value=");
    				$("#cpf").html("value=");
    			},                			
    			success: function(data){
    				$("#specialty").css({'display':'block'});
    				$("#specialty_label").css({'display':'block'});
    				$("#specialty").html(data);
    				
    				$("#doctors").html("value=");   
    				$("#date").html("value=");
    				$("#hour").html("value="); 
    				$("#cpf").html("value=");			
    			},
    			error: function(data){
    				$("#specialty").css({'display':'block'});
    				$("#specialty_label").css({'display':'block'});
    				$("#specialty").html("Houve um erro ao Carregar ");
    			
    			},
    		})
        });
           
        //DOCTORS COMMOM
        $("#specialty").on("change",function(){
    		var idSpecialty = $("#specialty").val();
    	
    		$.ajax({
    			url: 'php_files/schedule/selectdoctor.php',
    			type: 'POST',
    			data:{id3:idSpecialty},
    			beforeSend: function(){
    				$("#doctors").css({'display':'block'});
    				$("#doctors_label").css({'display':'block'});
    				$("#doctors").html("Carregando...");
    				
    				$("#date").html("value=");
    				$("#hour").html("value=");
    				$("#cpf").html("value=");
    			},                			
    			success: function(data){
    				$("#doctors").css({'display':'block'});
    				$("#doctors_label").css({'display':'block'});
    				$("#doctors").html(data);
    				
    				$("#date").html("value=");
    				$("#hour").html("value=");
    				$("#cpf").html("value=");
    			},
    			error: function(data){
    				$("#doctors").css({'display':'block'});
    				$("#doctors_label").css({'display':'block'});
    				$("#doctors").html("Houve um erro ao Carregar ");
    			
    			},
    		})
        });
		
		//DATE
        $("#doctors").on("change",function(){
    		var idDoctor = $("#doctors").val();
    	
    		$.ajax({
    			url: 'php_files/schedule/selectdata.php',
    			type: 'POST',
    			data:{id4:idDoctor},
    			beforeSend: function(){
    				$("#date").css({'display':'block'});
    				$("#date_label").css({'display':'block'});
    				$("#date").html("Carregando...");
    				
    				$("#hour").html("value=");
    				$("#cpf").html("value=");
    			},                			
    			success: function(data){
    				$("#date").css({'display':'block'});
    				$("#date_label").css({'display':'block'});
    				$("#date").html(data);
    			
    				$("#hour").html("value=");
    				$("#cpf").html("value=");
    			},
    			error: function(data){
    				$("#date").css({'display':'block'});
    				$("#date_label").css({'display':'block'});
    				$("#date").html("Houve um erro ao Carregar ");
    			},
    		})
        });
        
        //HOUR
        $("#date").on("change",function(){
    		var idDoctor = $("#doctors").val();
    		var idData = $("#date").val();
    	
    		$.ajax({
    			url: 'php_files/schedule/selecthour.php',
    			type: 'POST',
    			data:{id5:idDoctor,id6:idData},
    			beforeSend: function(){
    				$("#hour").css({'display':'block'});
    				$("#hour_label").css({'display':'block'});
    				$("#hour").html("Carregando...");
    				    				
    				$("#cpf").html("value=");
    			},                			
    			success: function(data){
    				$("#hour").css({'display':'block'});
    				$("#hour_label").css({'display':'block'});
    				$("#hour").html(data);
    				
    				$("#cpf").html("value=");
    			},
    			error: function(data){
    				$("#hour").css({'display':'block'});
    				$("#hour_label").css({'display':'block'});
    				$("#hour").html("Houve um erro ao Carregar ");
    				
    				$("#cpf").html("value=");
    			},
    		})
        });
        
        //CPF
        $("#hour").on("change",function(){
    		$.ajax({
    			beforeSend: function(){
    				$("#cpf").css({'display':'block'});
    				$("#cpf_label").css({'display':'block'});
    			},                			
    			success: function(data){
    				$("#cpf").css({'display':'block'});
    				$("#cpf_label").css({'display':'block'});
    			},
    			error: function(data){
    				$("#cpf").css({'display':'block'});
    				$("#cpf_label").css({'display':'block'});   			
    			},
    		})
		});
		
		const cpf = document.querySelector("#cpf");
        cpf.addEventListener("keyup", () => {
          let value = cpf.value.replace(/[^0-9]/g, "").replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");
          
          cpf.value = value;
        });
		        
        //BUTTON
        $("#cpf").on("change",function(){
    		$.ajax({
    			beforeSend: function(){
    				$("#btn_schedule").css({'display':'block'});
    			},                			
    			success: function(data){
    				$("#btn_schedule").css({'display':'block'});
    			},
    			error: function(data){
    				$("#btn_schedule").css({'display':'block'}); 			
    			},
    		})
		});
		
		/*//BUTTON DISABLE
		//desabilita o botão no início
        document.getElementById("btn_schedule").disabled = true;
        
        //cria um event listener que escuta mudanças no input
        document.getElementById("campo_cpf").addEventListener("campo_cpf", function(event){
        
          //busca conteúdo do input
            var conteudo = document.getElementById("campo_cpf").innerHTML;
            var teste_cpf = 'CPF Correto';
        		
            //valida conteudo do input 
            if (conteudo == teste_cpf) {
              //habilita o botão
              document.getElementById("btn_schedule").disabled = false;
            } else {
              //desabilita o botão se o conteúdo do input ficar em branco
              document.getElementById("btn_schedule").disabled = true;
            }
        });
        
        //MAKE APPOINTMENT
        $("#btn_schedule").on("click",function(){
        	var idCpf = $("#cpf").val();
    		var idHospital = $("#hospital").val();
    		var idDoctor = $("#doctors").val();
    		var idData = $("#data").val();
    		var idHour = $("#hour").val();
    	
    		$.ajax({
    			url: 'php_files/schedule/insertschedule.php',
    			type: 'POST',
    			data:{idCpf,idHospital,idDoctor,idData,idHour},
    			
    			beforeSend: function(){
    				$("#campo_cpf").html("Carregando..."); 	
    			},                			
    			success: function(data){
    				$("#campo_cpf").html("Consulta Agendada");
    				
    			},
    			error: function(data){
    				$("#campo_cpf").html("Erro no Agendamento");
    			},
    		})
        });*/
    </script>
    