<?php
    require_once('../initialize.php'); 
    // Include requred php mailer files
    include(PROJECT_PATH . '/private/phpMailer/src/Exception.php');
    include(PROJECT_PATH . '/private/phpMailer/src/PHPMailer.php');
    include(PROJECT_PATH . '/private/phpMailer/src/SMTP.php');

    // Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Create instance of phpmailer 
    $mail = new PHPMailer(true);
    $mail->isSMTP();
//    $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.flockmail.com';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'admin@enlacellc.com';
   $mail->Password = 'Abogado2020$';
   $mail->setFrom('admin@enlacellc.com', 'Enlace LLC');
//    $mail->addReplyTo('test@hostinger-tutorials.com', 'Your Name');
   $mail->addAddress('victordmtz@hotmail.com', 'Victor Martinez');
   $mail->Subject = 'Testing PHPMailer';
//    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->isHTML(true);
    $mail->Body = '<h1>Testing email message sent</h1>';
   $mail->addAttachment('src/SMTP.php');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
   $mail->smtpClose();
?>