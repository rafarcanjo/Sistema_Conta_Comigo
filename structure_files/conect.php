<?php
    // Conecta Banco
    //$server= "localhost";
    //$bank = "cent6323_bd_contacomigo";
    //$user = "cent6323_admin";
    //$password = "Slaviero@123";
    
    // Conecta Banco - Mysqli
    $server= "localhost";
    $bank = "bd_contacomigo";
    $user = "root";
    $password = "Slaviero@123";

    $mysqli = new mysqli($server,$user,$password,$bank);
    
    $conexao = new PDO ("mysql:host=localhost;dbname=bd_contacomigo","root","Slaviero@123");
    $conexao->exec('SET CHARACTER SET utf8');   
    
    // Valida Conexão
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>