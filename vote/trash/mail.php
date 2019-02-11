<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);                              
try {
    $mail->SMTPDebug = 2;                           
    $mail->isSMTP();                                
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;                         
    $mail->Username = 'itprojecttemp@gmail.com';    
    $mail->Password = 'passworderror';              
    $mail->SMTPSecure = 'tls';                      
    $mail->Port = 587;                              

    //Recipients
    $mail->setFrom('itprojecttemp@gmail.com.com', 'Surya');
    $mail->addAddress('surya.yugesh@gmail.com');    
    $mail->addReplyTo('blankpagersmail@gmail.com', 'Blankpagers');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'OTP for Login';
    $mail->Body    = '<p> Here is the OTP for your login this will valid upto 15 mins, No more than one OTP is generated for a person.</p><br><span>OTP:<b>01234567</b></span>';
    //$mail->AltBody = 'Here is the OTP for your login this will valid upto 15 mins, No more than one OTP is generated for a person.\nOTP:<b>01234567';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}