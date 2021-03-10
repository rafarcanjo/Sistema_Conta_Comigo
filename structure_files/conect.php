<?php
    // Conecta Banco
    $server= "localhost";
    $bank = "cent6323_bd_contacomigo";
    $user = "cent6323_admin";
    $passwordbd = "Slaviero@123";
    
    // Conecta Banco - Mysqli
    //$server= "localhost";
    //$bank = "bd_contacomigo";
    //$user = "root";
    //$password = "Slaviero@123";

    $mysqli = new mysqli($server,$user,$passwordbd,$bank);
    
    $conexao = new PDO ("mysql:host=localhost;dbname=cent6323_bd_contacomigo","cent6323_admin","Slaviero@123");
    $conexao->exec('SET CHARACTER SET utf8');   
    
    // Valida Conexão
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>