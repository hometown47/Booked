<?php

//require("class.phpmailer.php");

require_once('config/config.php');
require_once( './lib/external/phpmailer/PHPMailerAutoload.php');

echo (extension_loaded('openssl') ?'SSL Loaded':'SSL Not Loaded');


$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "smtp.gmail.com"; // SMTP server
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Username = "hometown47meister@gmail.com";
$mail->Password = "ccuw rxft whfm fssk";
$mail->Port = 587;

$mail->From     = "hometown47meister@gmail.com";
$mail->AddAddress("peter.jones@hibu.com", "Some Title");
$mail->SMTPDebug = 2;







$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;

if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
?>
    