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
$mail->Username   = getenv("EMAIL_PERS");
$mail->Password   = "AYOUBACHAK201";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "<pre>";   
    $mail->IsHTML(true);
    $mail->AddAddress(getenv("EMAIL_PERS"), "recipient-name");
    $mail->SetFrom(getenv("EMAIL_PERS"), "from-name");
    $mail->AddReplyTo(getenv("EMAIL_PERS"), "reply-to-name");
    $mail->AddCC(getenv("EMAIL_PERS"), "cc-recipient-name");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>"."<br>";
    $content.="Name :".$_POST["first-name"]."<br>";
    $content.="Last Name :".$_POST["last-name"]."<br>";
    $content.="Email :".$_POST["email"]."<br>";
    $content.="Number :".$_POST["number"]."<br>";
    $content.="Message :".$_POST["message"]."<br>";


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