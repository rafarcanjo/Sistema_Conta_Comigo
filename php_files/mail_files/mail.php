<?php   
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Test if is empty
    if (empty($_POST["company"])) {
        $email_err = "Digite seu email";
    } else {            
        //Aplicate Function Test Input
        $email = ($_POST["email"]);
        $name = ($_POST["name"]);
        $phone = ($_POST["phone"]);
        $company = ($_POST["company"]);
            
        // Inicia a classe PHPMailer 
        $mail = new PHPMailer(); 
        
        // Método de envio 
        $mail->IsSMTP();
        
        // Servidor SMTP
        $mail->Host = 'smtp.gmail.com';
        
        // Você pode alterar este parametro para o endereço de SMTP do seu provedor 
        $mail->Port = 465; 
        
        // Tipo de encriptação que será usado na conexão SMTP
        $mail->SMTPSecure = 'ssl';
        
        // Usar autenticação SMTP (obrigatório) 
        $mail->SMTPAuth = true; 
        
        // Usuário do servidor SMTP (endereço de email) 
        // obs: Use a mesma senha da sua conta de email 
        $mail->Username = 'rafarcanjo0110@gmail.com'; 
        $mail->Password = 'Rafael0110'; 
        
        // Configurações de compatibilidade para autenticação em TLS 
        //$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
        
        // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
        $mail->SMTPDebug = 2; 
        
        // Define o remetente 
        // Seu e-mail 
        $mail->From = "rafarcanjo0110@gmail.com"; 
        
        // Seu nome 
        $mail->FromName = "Conta Comigo"; 
        
        // Define o(s) destinatário(s) 
        $mail->AddAddress('rafael.arcanjo@slavierobenefits.com.br', 'Rafael Arcanjo'); 
        
        // Opcional: mais de um destinatário
        // $mail->AddAddress('fernando@email.com'); 
        
        // Opcionais: CC e BCC
        // $mail->AddCC('joana@provedor.com', 'Joana'); 
        // $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
        
        // Definir se o e-mail é em formato HTML ou texto plano 
        // Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
        $mail->IsHTML(true); 
        
        // Charset (opcional) 
        $mail->CharSet = 'UTF-8'; 
        
        // Assunto da mensagem 
        $mail->Subject = "Assunto da mensagem"; 
        
        // Corpo do email 
        $mail->Body = 'O Hospital '.$company.' esqueceu a senha de acesso.<br/>Nome: '.$name.'<br/>Email: '.$email.'<br/>Telefone: '.$phone; 
        
        // Opcional: Anexos 
        // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
        
        // Envia o e-mail 
        $enviado = $mail->Send(); 
        
        // Exibe uma mensagem de resultado 
        if ($enviado){ 
            header('location: ../../structure_files/alerts/change_submitted.php');
        } else { 
            echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
        }
    }
}
?>