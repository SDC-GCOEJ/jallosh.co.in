<?php
require 'PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jallosh2k16@gmail.com';
$mail->Password = 'Jallosh@2016';
$mail->SMTPSecure = 'tls';
 
$mail->From = 'raj.amalw@gmail.com';
$mail->FromName = 'Raj Amal';
$mail->addAddress('rizwansyed820@gmail.com', 'Raj Amal W');
 
$mail->addReplyTo('raj.amalw@gmail.com', 'Raj Amal W');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
