<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->Username = 'santiagoorvillejames_bscs@plmun.edu.ph';
$mail->Password = 'turwebojbvycxywu';

$mail->setFrom($email, $name);
$mail->addAddress("santiagoorvillejames_bscs@plmun.edu.ph","James");
$mail->isHTML(true);
$mail->Subject = "Message received from Penpen's Art Gallery: ". $name;

$mail->Body = "E-mail: ".$email. "<br> <br>". $message;

$mail->send();

header("refresh:0; url=contact.html");