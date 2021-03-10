<?php
// Session Start
include '../../structure_files/conect.php';
include '../function.php';

// Campo que fez requisi��o
$campo = test_input($_GET['campo']);
// Valor do campo que fez requisi��o
$valor = test_input($_GET['valor']);

if ($valor == "") {
    echo "Preencha o campo com seu CPF".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
} elseif (strlen($valor) > 14) {
    echo "O CPF deve ter no máximo 14 caracteres".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
} elseif (strlen($valor) < 14) {
    echo "O CPF deve ter no mínimo 14 caracteres".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
} else if ($campo == "cpf") {
    // Campo que fez requisi��o
    $campo = limpa_cpf($_GET['campo']);
    // Valor do campo que fez requisi��o
    $valor = limpa_cpf($_GET['valor']);
    
    
    if ($testcpf = mysqli_query($mysqli,"SELECT cpf,contacomigo FROM holder WHERE cpf = '$valor'")){
        if((mysqli_num_rows ($testcpf) < 1 )){
            echo "Portador não cadastrado no Conta Comigo".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
            //Cleaning mysqli
            mysqli_free_result($testcpf);
            
        }else{
            $linha = mysqli_fetch_assoc($testcpf);
            $cpf = $linha["cpf"];
            $contacomigo = $linha["contacomigo"];
        
            
            if (($cpf == $valor)&&($contacomigo==1)) {
                echo "CPF Correto".'<button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule" class="btn btn-primary">Agendar</button><br />';
            } elseif ($cpf != $valor){
                echo "CPF Incorreto".'<button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
            } elseif (($cpf == $valor)&&($contacomigo==0)){
                echo "Portador não ativou o Conta Comigo".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';
            }
        }
    } else { echo "CPF Incorreto 3".'<br/><br/> <button type="submit" value="Agendar" id="btn_schedule" name="btn_schedule"  class="btn btn-danger" disabled>Agendar</button><br />';}
}
// Acentua��o
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>