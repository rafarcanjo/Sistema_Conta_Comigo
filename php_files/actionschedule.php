<?php 
	include 'php_files/conect.php';
	
	$update_err = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	    
	    ///////// Confirm Schedule
	    if ((!empty($_POST["confirmed"])&&(!empty($_POST["id_appointment"])))) {
	        //Aplicate Function Test Input
	        $id_appointment_update = ($_POST["id_appointment"]);
	        
	        //Update Confirm
	        if ($result_isconfirmed = mysqli_query($mysqli, "UPDATE appointments SET is_confirmed = '1' WHERE appointments.id_appointment = '$id_appointment_update'")){
	            
                //header('location: http://www.app.contacomigo.org/appointmentschedule.php');
	        }else{$update_err = "No Update 1";}
	        
	    }else{$update_err = "Post Confirmed Vazio";}
	    
	    ///////// Porstpone Schedule
	    if ((!empty($_POST["porstpone"])&&(!empty($_POST["id_appointment"])))) {
	        //Aplicate Function Test Input
	        $id_appointment_update = ($_POST["id_appointment"]);
	        
	        //Update Porstpone
	        if ($result_isconfirmed = mysqli_query($mysqli, "UPDATE appointments SET is_confirmed = '2' WHERE appointments.id_appointment = '$id_appointment_update'")){
	           
	            //header(location: http://www.app.contacomigo.org/appointmentschedule.php');
	        }else{$update_err = "No Update 2";}
	        
	    }else{$update_err = "Post Porstpone Vazio";}
	    
	    /////////// Cancel Schedule
	    if ((!empty($_POST["cancel"])&&(!empty($_POST["id_appointment"])))) {
	        //Aplicate Function Test Input
	        $id_appointment_update = ($_POST["id_appointment"]);
	        
	        //Update Cancel
	        if ($result_isconfirmed = mysqli_query($mysqli, "UPDATE appointments SET is_confirmed = '3' WHERE appointments.id_appointment = '$id_appointment_update'")){
	               
                //header('location: http://www.app.contacomigo.org/appointmentschedule.php');
	        }else{$update_err = "No Update 3";}
	        
	    }else{$update_err = "Post Cancel Vazio";}
        
	}else{$update_err = "No Post";}

?>