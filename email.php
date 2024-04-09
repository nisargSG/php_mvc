<?php
require 'phpMailer/src/PHPMailer.php';
require 'phpMailer/src/SMTP.php';
require 'phpMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$smtpHostname = 'smtp.mailgun.org';
$smtpPort = 587; // recommended port
$smtpUsername = 'postmaster@sandbox527f9f772b3947d2bd3b8d20c4c07b4f.mailgun.org';
$smtpPassword = '5ff4b8460d67e1bb73d4fbe1951ec50b-4c205c86-696cd2ac';

$recipientEmail = 'nisargsg.tops@gmail.com';
$subject = 'Test Email from Mailgun';
$body = '<p><h1>This is a test email</h1> sent from Mailgun using PHP</p>';

try{


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    
    $mail->Host = $smtpHostname;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;
    
    // Sender and recipient
    $mail->setFrom("postmaster@sandbox527f9f772b3947d2bd3b8d20c4c07b4f.mailgun.org");
    $mail->addAddress($recipientEmail);
    
    // Email content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    
    // Send the email
    $mail->send();
    echo 'Email has been sent successfully!';

}

catch (Exception $e) {
    echo($e);
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>