    <label>Digite o CPF do Paciente</label>
            <form method='POST' action="<?php $_SERVER['PHP_SELF'] ?>">
                <input type='text' placeholder='999.999.999-99' maxlength="14	" name='search_cpf'>
                <input type='submit' value='Buscar' name='btn' class='btn btn-sm btn-primary'>
            </form><br/>
<?php
    //POST Formulário de CPF
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Coletar valor do Input / Post
        $cpf = $_POST['search_cpf'];
        
        // limpando cpf
        $cpf = str_replace(".", "-", $cpf);
        
        if (empty($cpf)) {
            echo "o campo CPF está vazio. Digite Novamente";
        } else {

            //Criando Variaveis
            $num_cpf_tratado = $cpf;
            $x = 0;
            
            //query - busca CPF no banco
            if ($sql_slug = mysqli_query($mysqli, "SELECT * FROM wp_cf_form_entry_values WHERE value like '$num_cpf_tratado'")) { 
                while ($registro = mysqli_fetch_array($sql_slug))
                {
                    $entry_id = $registro['entry_id'];
                }
                
                //query - busca todos dados com mesmo ID
                if ($sql_linha = mysqli_query($mysqli, "SELECT value FROM wp_cf_form_entry_values WHERE entry_id like '$entry_id'")) {
                    
                    //adiciona dados ao array
                    while ($registro2 = mysqli_fetch_assoc($sql_linha))
                    {
                        $consulta[$x] = ($registro2['value']);
                        $x++;
                    }            
                }else{
                    echo "Falha na consulta do value"; exit();
                }
                
                // Fechando mysqli
                mysqli_free_result($mysqli);
                mysqli_close($mysqli);
                
            }else{
                echo "Falha na consulta do banco"; exit();
            }
            
            //Exibindo Resultado
            echo "Cadastro Confirmado"; echo "<br/>";
            echo "Hospital:   " . $consulta[0]; echo "<br/>";
            echo "Especialidade:   " . $consulta[1]; echo "<br/>";
            echo "Médico:   " . $consulta[2]; echo "<br/>";
            echo "Valor:   " . $consulta[3]; echo "<br/>";
            echo "Data Agendada:   " . $consulta[4]; echo "<br/>";
            echo "Horário Agendado:   " . $consulta[5]; echo "<br/>";
            echo "Nome Completo do Paciente:   " . $consulta[7]; echo "<br/>";
            echo "Telefone Paciente:   " . $consulta[8]; echo "<br/>";
            echo "CPF Paciente:   " . $consulta[10]; echo "<br/><br/>";
            
        }
    }
?>