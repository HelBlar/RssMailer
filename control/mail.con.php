<?php
session_start();
$mailTo=$_SESSION['user'];
$mailBody=(string)$_SESSION['content'];
//echo $mailBody;


require '../PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.postmarkapp.com:587';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cafa5424-a5d9-4450-abd3-92917d45efe3';   // SMTP username
$mail->Password = 'cafa5424-a5d9-4450-abd3-92917d45efe3';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'MAIL@MAIL.PL';
$mail->FromName = 'Kamil Drozd';
$mail->addAddress($mailTo);                                  // Add a recipient

$mail->WordWrap = 100;                                 // Set word wrap to 50 characters

$mail->Subject = 'Mail From RssMailer APP';
$mail->Body    = $mailBody;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
    header('location:../index.php');
}
