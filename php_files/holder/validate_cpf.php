<?php
// Session Start
include '../Sistema_ContaComigo/php_files/function.php';

// Defining Variables
$cpf_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Test if isnt empty
    if (!empty($_POST["cpf_schedule"])) {
        //Aplicate Function Test Input
        $cpf_schedule = test_input($_POST["cpf_schedule"]);
        $cpf_schedule = limpa_cpf($_POST["cpf_schedule"]);
        
        if($result_validation = mysqli_query($mysqli, "SELECT contacomigo FROM holder WHERE `cpf` like '$cpf_schedule'")){
            
            while($linha = mysqli_fetch_assoc($result_validation)){
                $contacomigo = ($linha["contacomigo"]);
            }
            
            /////////// Search CPF in the database
            if ($result_cpf = mysqli_query($mysqli, "SELECT * FROM appointments WHERE `cpf` like '$cpf_schedule'")){
                $total = mysql_num_rows($result_cpf);
                
                //Email and Password = Invalid
                if($total < 1 ){
                    $cpf_err = "Nenhum Registro Encontrado";
                    //Cleaning mysqli
                    mysqli_free_result($result_cpf);
                }else{
                    //Defining Count
                    $count = mysqli_num_rows($result_cpf);
                    $count7 = $count8 = $count9 = $count10 = $count11 = $count12 = $count;
                    
                    while($linha = mysqli_fetch_assoc($result_cpf)){
                        $id_appointment[$count7] = ($linha["id_appointment"]);
                        $cpf_bd[$count7] = $linha["cpf"];
                        $id_hospital[$count7] = $linha["id_company"];
                        $id_doctor[$count7] = $linha["id_doctor"];
                        $date[$count7] = $linha["date"];
                        $start_hour[$count7] = $linha["start_hour"];
                        $end_hour[$count7] = $linha["end_hour"];
                        $is_confirmed[$count7] = $linha["is_confirmed"];
                        
                        $count7--;
                    }
                    
                    //Cleaning mysqli
                    mysqli_free_result($result_cpf);
                }
                
                /////////// Search USER
                while ($count8>0){
                    if ($result_user = mysqli_query($mysqli, "SELECT name, phone FROM holder WHERE `cpf` like '$cpf_bd[$count8]'")){
                        
                        //Email and Password = Invalid
                        if((mysqli_num_rows ($result_user) < 1 )){
                            $date_err2 = "Nenhum Portador Encontrado";
                            
                            //Cleaning mysqli
                            mysqli_free_result($result_user);
                        }else{
                            $linha_holder = mysqli_fetch_assoc($result_user);
                            $name_holder[$count8] = $linha_holder["name"];
                            $phone_holder[$count8] = $linha_holder["phone"];
                        }
                        
                        //Cleaning mysqli
                        mysqli_free_result($result_user);
                        
                    }else{  echo "Falha na consulta do Portador"; exit();}
                    $count8--;
                }
                
                
                /////////// Search Doctor
                while($count9>0){
                    if ($result_doctor = mysqli_query($mysqli, "SELECT name,id_specialty FROM doctors WHERE `id_doctor` like '$id_doctor[$count9]'")){
                        
                        //Email and Password = Invalid
                        if((mysqli_num_rows ($result_doctor) < 1 )){
                            $date_err2 = "Nenhum Doutor Encontrado";
                            
                            //Cleaning mysqli
                            mysqli_free_result($result_doctor);
                        }else{
                            $linha_doctor = mysqli_fetch_assoc($result_doctor);
                            $name_doctor[$count9] = $linha_doctor["name"];
                            $id_specialty[$count9] = $linha_doctor["id_specialty"];
                        }
                        
                        //Cleaning mysqli
                        mysqli_free_result($result_doctor);
                        
                    }else{  echo "Falha na consulta do Doutor"; exit();}
                    $count9--;}
                    
                    
                    /////////// Search Company
                    while($count10>0){
                        if ($result_hospital = mysqli_query($mysqli, "SELECT company_name FROM company WHERE `id_company` like '$id_hospital[$count10]'")){
                            
                            //Email and Password = Invalid
                            if((mysqli_num_rows ($result_hospital) < 1 )){
                                $date_err2 = "Nenhum Hospital Encontrado";
                                //Cleaning mysqli
                                mysqli_free_result($result_hospital);
                                
                            }else{
                                $linha_hospital = mysqli_fetch_assoc($result_hospital);
                                $name_hospital[$count10] = $linha_hospital["company_name"];
                            }
                            
                            //Cleaning mysqli
                            mysqli_free_result($result_hospital);
                            
                        }else{  echo "Falha na consulta do Hospital"; exit();}
                        $count10--;}
                        
                        
                        /////////// Search Specialty
                        while($count11>0){
                            if ($result_specialty = mysqli_query($mysqli, "SELECT name FROM specialties WHERE `id_specialty` like '$id_specialty[$count11]'")){
                                
                                //Email and Password = Invalid
                                if((mysqli_num_rows ($result_specialty) < 1 )){
                                    $date_err2 = "Nenhuma Especialidade Encontrada";
                                    
                                    //Cleaning mysqli
                                    mysqli_free_result($result_specialty);
                                    
                                }else{
                                    $linha_specialty = mysqli_fetch_assoc($result_specialty);
                                    $specialty[$count11] = $linha_specialty["name"];
                                }
                                //Cleaning mysqli
                                mysqli_free_result($result_specialty);
                                
                            }else{  echo "Falha na consulta da Especialidade"; exit();}
                            $count11--;}
                            
            //Close Search in database
            }else{  echo "Falha na consulta do Banco"; exit();}
            
        //Close IF validating if are active conta comigo holder
        }else { $cpf_err = "CPF inválido";}
        
    //Close "IF VOID POST"
    }else { $cpf_err = "Digite o CPF";}
    
//Close "IF HAVE POST"
}
?>