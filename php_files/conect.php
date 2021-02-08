<?php
    // Conecta Banco
    //$server= "localhost";
    //$bank = "cent6323_bd_contacomigo";
    //$user = "cent6323_admin";
    //$password = "Slaviero@123";
    
    // Conecta Banco
    $server= "localhost";
    $bank = "bd_contacomigo";
    $user = "root";
    $password = "Slaviero@123";

    $mysqli = new mysqli($server,$user,$password,$bank);
    
    // Valida Conexão
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>