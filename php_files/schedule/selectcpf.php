<?php
// Session Start
include '../conect.php';

// Campo que fez requisição
$campo = $_GET['campo'];
// Valor do campo que fez requisição
$valor = $_GET['valor'];

if ($valor == "") {
    echo "Preencha o campo com seu CPF";
} elseif (strlen($valor) > 11) {
    echo "O CPF deve ter no máximo 11 caracteres";
} else if ($campo == "cpf") {
    if ($testcpf = mysqli_query($mysqli,"SELECT cpf,contacomigo FROM holder WHERE cpf = '$valor'")){
        if((mysqli_num_rows ($testcpf) < 1 )){
            echo "CPF Incorreto 1";
            //Cleaning mysqli
            mysqli_free_result($testcpf);
            
        }else{
            $linha = mysqli_fetch_assoc($testcpf);
            $cpf = $linha["cpf"];
            $contacomigo = $linha["contacomigo"];
        
            
            if (($cpf == $valor)&&($contacomigo==1)) {
                echo "CPF Correto";
            } elseif ($cpf != $valor){
                echo "CPF Incorreto 2";
            } elseif (($cpf == $valor)&&($contacomigo==0)){
                echo "Portador não cadastrado no Conta Comigo";
            }
        }
    } else { echo "CPF Incorreto 3";}
}

// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
  
?>