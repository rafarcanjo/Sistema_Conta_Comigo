<!-- Include Header -->
<?php 
	include 'structure_files/header.php';
	include 'php_files/conect.php';
?>

<!-- Schedule Form -->
<div class="container">
	<div class="row my-5 my-sm-2 py-5">
		<div class="col-md-12">
            <form name="schedule_form" method="post" ><br/>
                
                
                <!-- Hospitais -->
                <label>Hospital:</label><br/>
                <select name="hospital" id="hospital">
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
                </select><br/><br/>
				
                <label id="specialty_label" style="display:none">Especialidade:</label>
				<select name="specialty" id="specialty" style="display:none">
				</select><br/>

				<label id="doctors_label" style="display:none">Doutor:</label>				                           
				<select name="doctors" id="doctors" style="display:none">
				</select><br/>
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
    			},                			
    			success: function(data){
    				$("#specialty").css({'display':'block'});
    				$("#specialty_label").css({'display':'block'});
    				$("#specialty").html(data);
    			
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
    			},                			
    			success: function(data){
    				$("#doctors").css({'display':'block'});
    				$("#doctors_label").css({'display':'block'});
    				$("#doctors").html(data);
    			
    			},
    			error: function(data){
    				$("#doctors").css({'display':'block'});
    				$("#doctors_label").css({'display':'block'});
    				$("#doctors").html("Houve um erro ao Carregar ");
    			
    			},
    		})
        });
		
    </script>