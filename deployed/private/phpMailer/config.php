<?php
    // require_once('../initialize.php'); 
    // Include requred php mailer files
    include(PROJECT_PATH . '/private/phpMailer/src/Exception.php');
    include(PROJECT_PATH . '/private/phpMailer/src/PHPMailer.php');
    include(PROJECT_PATH . '/private/phpMailer/src/SMTP.php');

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
        $mail->Host = 'TITAN_HOST';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'TITAN_USER';
        $mail->Password = 'TITAN_PWD';
        
        $mail->isHTML(true);
    }
    
    function mailerSend(
        $from = array('admin@enlacellc.com', 'Enlace LLC'),
        $to = array('abogadovictordomingo@hotmail.com', 'Victor Martinez'),
        $subject = 'Enlace LLC',
        $body ='Enlace LLC')
        // too add attachments -> $mail->addAttachment('src/SMTP.php');
        {
            global  $mail;
            $mail->setFrom($from[0], $from[1]);
            $mail->addAddress($to[0], $to[1]);
            $mail->Subject = $subject;
            $mail->Body = $body;
            if (!$mail->send()) {
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'The email message was sent.';
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