<?php
// Session Start
include '../../structure_files/conect.php';
include '../function.php';

// Campo que fez requisição
$campo = test_input($_GET['campo']);
// Valor do campo que fez requisição
$valor = test_input($_GET['valor']);

if ($valor == "") {
    echo "Preencha o campo com seu CPF";
} elseif (strlen($valor) > 14) {
    echo "O CPF deve ter no máximo 14 caracteres";
} elseif (strlen($valor) < 14) {
    echo "O CPF deve ter no mínimo 14 caracteres";
} else if ($campo == "cpf") {
    // Campo que fez requisição
    $campo = limpa_cpf($_GET['campo']);
    // Valor do campo que fez requisição
    $valor = limpa_cpf($_GET['valor']);
    
    
    if ($testcpf = mysqli_query($mysqli,"SELECT cpf,contacomigo FROM holder WHERE cpf = '$valor'")){
        if((mysqli_num_rows ($testcpf) < 1 )){
            echo "Portador não cadastrado no Conta Comigo";
            //Cleaning mysqli
            mysqli_free_result($testcpf);
            
        }else{
            $linha = mysqli_fetch_assoc($testcpf);
            $cpf = $linha["cpf"];
            $contacomigo = $linha["contacomigo"];
        
            
            if (($cpf == $valor)&&($contacomigo==1)) {
                echo "CPF Correto";
            } elseif ($cpf != $valor){
                echo "CPF Incorreto";
            } elseif (($cpf == $valor)&&($contacomigo==0)){
                echo "Portador não ativou o Conta Comigo";
            }
        }
    } else { echo "CPF Incorreto 3";}
}
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>