<?php

include '../../structure_files/conect.php';
include '../../structure_files/link.html';
include '../../php_files/function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cpf = limpa_cpf($_POST['cpf']);
    $hospital = $_POST['hospital'];
    $doctor = $_POST['doctors'];
    $date = $_POST['date_text'];
    $hour = $_POST['hour'];
    $is_confirmed = "2";
    
    //echo $cpf." , ".$hospital." , ".$doctor." , ".$date." , ".$hour;
    
    //Update Confirm
    $stmt = $conexao->prepare("INSERT INTO appointments (cpf, id_company, id_doctor, date, start_hour, end_hour, is_confirmed) VALUES (?,?,?,?,?,?,?)");
    
    try {
        //passa as  variсveis para preencher os pontos de interrogaчуo
        //o parametro 's' significa que vocъ estс passando uma string. Щ como um printf...
        $stmt->bindParam(1, $cpf);
        $stmt->bindParam(2, $hospital);
        $stmt->bindParam(3, $doctor);
        $stmt->bindParam(4, $date);
        $stmt->bindParam(5, $hour);
        $stmt->bindParam(6, $hour);
        $stmt->bindParam(7, $is_confirmed);
        
        //executa o statement
        $stmt->execute();
        header('location:/../Sistema_ContaComigo/home.php');
    }
    catch (PDOException $erro){
        echo "Nуo foi possivel inserir os dados no banco: ".$erro->getMessage();
    }
}
?>