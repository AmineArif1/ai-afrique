<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = $_ENV["EMAIL_PERS"];
$mail->Password   = $_ENV["RANDOM_STRING"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "<pre>";
    $mail->IsHTML(true);
    $mail->AddAddress($_ENV["EMAIL_PERS"], "recipient-name");
    $mail->SetFrom($_ENV["EMAIL_PERS"], "from-name");
    $mail->AddReplyTo($_ENV["EMAIL_PERS"], "reply-to-name");
    $mail->AddCC($_ENV["EMAIL_PERS"], "cc-recipient-name");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>"."<br>";
    $content.="Name :".$_POST["first-name"]."<br>";
    $content.="Last Name :".$_POST["last-name"]."<br>";
    $content.="Email :".$_POST["email"]."<br>";
    $content.="Université :".$_POST["universite"]."<br>";
    $content.="Ville :".$_POST["ville"]."<br>";
    $content.="Pays :".$_POST["pays"]."<br>";


    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
    } else {
    echo "Email sent successfully";
    }
    header("Location:index.php");


}

?>