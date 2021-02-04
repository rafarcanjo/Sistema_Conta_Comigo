<?php
// Session Start
include 'php_files/conect.php';

// Defining Variables
$date_err = $date_err2 = "";
//$cpf = $company = $doctor = $date = $start_hour = $end_hour = $is_confirmed = "";
//$name_doctor = $name_holder = $name_hospital = "";
//$phone_holder = $id_appointment = $id_doctor = $id_hospital = $id_ortopedy = $id_specialty = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Test if is empty
    if (empty($_POST["date_schedule"])) {
        $date_err = "Selecione a Data";
        
    }else {
        //Aplicate Function Test Input
        $date_schedule = test_input($_POST["date_schedule"]);
        
        /////////// Search Date in the database
        if ($result_date = mysqli_query($mysqli, "SELECT * FROM appointments WHERE `date` like '$date_schedule'")){
            
            //Email and Password = Invalid
            if((mysqli_num_rows ($result_date) < 1 )){
                $date_err2 = "Nenhum Registro Encontrado";
                header('location: /../Sistema_ContaComigo/appointmentschedule.php');
                
                //Cleaning mysqli
                mysqli_free_result($result_date);
            }else{
                $count = mysqli_num_rows($result_date);
                while($linha = mysqli_fetch_array($result_date)){
                    $id_appointment = ($linha["id_appointment"]);
                    $cpf_bd = $linha["cpf"];
                    $id_hospital = $linha["id_company"];
                    $id_doctor = $linha["id_doctor"];
                    $date = $linha["date"];
                    $start_hour = $linha["start_hour"];
                    $end_hour = $linha["end_hour"];
                    $is_confirmed = $linha["is_confirmed"];
                }
                
                //Cleaning mysqli
                mysqli_free_result($result_date);
                
                /////////// Search CPF
                if ($result_cpf = mysqli_query($mysqli, "SELECT name, phone FROM holder WHERE `cpf` like '$cpf_bd'")){
                    
                    //Email and Password = Invalid
                    if((mysqli_num_rows ($result_cpf) < 1 )){
                        $date_err2 = "Nenhum Portador Encontrado";
                        
                        //Cleaning mysqli
                        mysqli_free_result($result_cpf);
                    }else{
                        while($linha_holder = mysqli_fetch_array($result_cpf)){
                            $name_holder = $linha_holder["name"];
                            $phone_holder = $linha_holder["phone"];
                        }
                        
                        //Cleaning mysqli
                        mysqli_free_result($result_cpf);
                        
                        /////////// Search Doctor
                        if ($result_doctor = mysqli_query($mysqli, "SELECT name,id_specialty,id_ortopedy FROM doctors WHERE `id_doctor` like '$id_doctor'")){
                            
                            //Email and Password = Invalid
                            if((mysqli_num_rows ($result_doctor) < 1 )){
                                $date_err2 = "Nenhum Doutor Encontrado";
                                
                                //Cleaning mysqli
                                mysqli_free_result($result_doctor);
                            }else{
                                while($linha_doctor = mysqli_fetch_array($result_doctor)){
                                    $name_doctor = $linha_doctor["name"];
                                    $id_specialty = $linha_doctor["id_specialty"];
                                    $id_ortopedy = $linha_doctor["id_ortopedy"];
                                }
                                
                                //Cleaning mysqli
                                mysqli_free_result($result_doctor);
                                
                                /////////// Search Company
                                if ($result_hospital = mysqli_query($mysqli, "SELECT company_name FROM company WHERE `id_company` like '$id_hospital'")){
                                    
                                    //Email and Password = Invalid
                                    if((mysqli_num_rows ($result_hospital) < 1 )){
                                        $date_err2 = "Nenhum Hospital Encontrado";
                                        
                                        //Cleaning mysqli
                                        mysqli_free_result($result_hospital);
                                    }else{
                                        while($linha_hospital = mysqli_fetch_array($result_hospital)){
                                            $name_hospital = $linha_hospital["company_name"];
                                        }
                                        
                                        //Cleaning mysqli
                                        mysqli_free_result($result_hospital);
                                        
                                        /////////// Search Specialty
                                        if ($result_specialty = mysqli_query($mysqli, "SELECT name FROM specialties WHERE `id_specialty` like '$id_specialty'")){
                                            
                                            //Email and Password = Invalid
                                            if((mysqli_num_rows ($result_specialty) < 1 )){
                                                $date_err2 = "Nenhuma Especialidade Encontrada";
                                                
                                                //Cleaning mysqli
                                                mysqli_free_result($result_specialty);
                                            }else{
                                                while($linha_specialty = mysqli_fetch_array($result_specialty)){
                                                    $id_ortopedy = $linha_specialty["name"];
                                                    $specialty = $linha_specialty["name"];
                                                }
                                                
                                                //Cleaning mysqli
                                                mysqli_free_result($result_specialty);
                                                
                                                /////////// Search Orotopedy Specialty
                                                if ($result_ortopedy = mysqli_query($mysqli, "SELECT ortopedy_specialty FROM ortopedy WHERE `id_ortopedy` like '$id_ortopedy'")){
                                                    
                                                    //Email and Password = Invalid
                                                    if((mysqli_num_rows ($result_ortopedy) < 1 )){
                                                        
                                                        //Cleaning mysqli
                                                        mysqli_free_result($result_ortopedy);
                                                    }else{
                                                        while($linha_ortopedy = mysqli_fetch_array($result_ortopedy)){
                                                            $ortopedy_specialty = $linha_ortopedy["ortopedy_specialty"];
                                                        }
                                                        
                                                        //Cleaning mysqli
                                                        mysqli_free_result($result_hospital);
                                                    }
                                                }else{  echo "Falha na consulta da Especialidade Óssea"; exit();}
                                            }
                                        }else{  echo "Falha na consulta da Especialidade"; exit();}
                                    }
                                }else{  echo "Falha na consulta do Hospital"; exit();}
                            }
                        }else{  echo "Falha na consulta do Doutor"; exit();}
                    }
                }else{  echo "Falha na consulta do Portador"; exit();}
            }
        }else{  echo "Falha na consulta do Banco"; exit();}
    }
}

//Function Test input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>