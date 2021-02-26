<?php
// Session Start
include '../../structure_files/conect.php';
include '../function.php';
    
// Campo que fez requisição

    $hospital = $_POST['hospital'];
    $doctor = $_POST['doctors'];
    $specialty = $_POST['specialty'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $cpf = limpa_cpf($_POST['cpf']);

    //Validating CPF
    $testcpf = $conexao->prepare("SELECT cpf FROM holder WHERE cpf = '$cpf' and `contacomigo` = '1'");
    $testcpf->execute();
    
    if (mysqli_num_rows ($test_cpf) < 1 ){
        echo "CPF Incorreto"; 
    }
    else if ($testcpf['cpf'] == $cpf) { 
        $insert_appointments = $conexao->prepare("INSERT INTO appointments (`cpf`, `id_company`, `id_doctor`, `date`, `start_hour`, `is_confirmed`) VALUES ('$cpf','$hospital','$doctor','$date','$hour','2')");
        $insert_appointments->execute();
    }
    else { echo "Falou Insert"; }
    
    

?>