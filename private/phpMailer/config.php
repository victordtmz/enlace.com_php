<?php
    // require_once('../initialize.php'); 
    // Include requred php mailer files
    $language = $_SESSION['language'] ?? 'es';
    include(PRIVATE_FILES . '/phpMailer/src/Exception.php');
    include(PRIVATE_FILES . '/phpMailer/src/PHPMailer.php');
    include(PRIVATE_FILES . '/phpMailer/src/SMTP.php');

    // Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = '';
    function mailerOpen(){
        global  $mail;

        // Create instance of phpmailer 
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        //    $mail->SMTPDebug = 2;
        $mail->Host = TITAN_HOST;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = TITAN_USER;
        $mail->Password = TITAN_PWD;
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
    }
    
    

    
    

    function mailerSend($signature='US',
        $from = array('admin@enlacellc.com', 'Enlace LLC'),
        $to = array('Victor Martinez' => 'abogadovictordomingo@hotmail.com'),
        $subject = 'Enlace LLC',
        $body ='Enlace LLC')
        // too add attachments -> $mail->addAttachment('src/SMTP.php');
        {
            global  $mail;
            global $signatureUS;
            global $signatureMexico;
            if(strtoupper($signature) == 'MEXICO'){
                $signature = SIGNATURE_MEXICO;
            }else{
                $signature = SIGNATURE_US;
            }
            
            $body .= $signature;
            $mail->setFrom($from[0], $from[1]);
            // add all recepients
            foreach($to as $name => $email){
                $mail->addAddress($email, $name);
            }
            
            $mail->Subject = $subject;
            $mail->Body = $body;
            if (!$mail->send()) {
                if ($language == 'es'){
                    echo '<pre> Error al enviar el mensaje, por favor intente nuevamente, si el error persiste, llamenos.  </pre>';
                }else{
                    // echo '<pre> Mailer Error: ' . $mail->ErrorInfo . '</pre>';
                    echo '<pre> Error, message not sent, please try again, if error persists, please call us.  </pre>';
                }




                    
                } else 
                    if ($language == 'es'){
                    echo '<p> Mensaje enviado correctamente, gracias.  </p>';
                }else{
                    // echo '<pre> Mailer Error: ' . $mail->ErrorInfo . '</pre>';
                    echo '<p> Message sent successfully, thank you.  </p>';
                }
        }

    function mailerClose(){
        global  $mail;
        $mail->smtpClose();
    }
    //    $mail->addReplyTo('test@hostinger-tutorials.com', 'Your Name');
    // $mail->addAddress('victordmtz@hotmail.com', 'Victor Martinez');
    // $mail->Subject = 'Testing PHPMailer';
    //    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    
    // $mail->Body = '<h1>Testing email message sent</h1>';
?>