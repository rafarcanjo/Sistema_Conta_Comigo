<?php
// Session Start
include '../../structure_files/conect.php';

	$update_err = "";

    //Aplicate Function Test Input
    $id_appointment_update = ($_POST["idAppointment"]);
    
    //Update Cancel
    if ($result_isconfirmed = mysqli_query($mysqli, "UPDATE appointments SET is_confirmed = '3' WHERE appointments.id_appointment = '$id_appointment_update'")){
    }else{$update_err = "No Update 3";}
?>