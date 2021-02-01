<!-- Include Header -->
<?php 
	include 'structure_files/header.html';	
?>

	<!-- Container 100% -->
	<div class="container_static">
		<form method="get">
		
    		<!-- Big Calendar -->
    		<div class="vspacer_4"></div><div class="spacer_4"></div>
            <div class="box_4" id="calendario"></div>
            
            <!-- Hour and Submit -->
            <div class="box_4">
                <label class="label_2">Escolha um Horário</label>
                <div class="spacer_4"></div>
                
                <select name="hour_schedule" class="">
                	<option>14:00</option>
                	<option>15:00</option>
                	<option>16:00</option>
                </select>
                <div class="spacer_4"></div>
                <input type="submit" value="Remarcar" style="float: left;">
            </div>
        </form>        
	</div>
	
<!-- Include Footer -->
<?php 
	include 'structure_files/footer.html';	
?>