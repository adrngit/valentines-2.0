<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'adrianaliaa07@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'Aliaa711!';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('adrianaliaa07@gmail.com', 'Adrian');         //Set the sender of the message (your email address)
    $mail->addAddress('xdu711@gmail.com', 'edu');     //Add a recipient (your baes email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I LOVE YOU SO SO SO SO MUCH BABYYYYY';
    $mail->Body    = 'Happy Valentines day baby. You mean the whole world to me and I love you more than anything this world has to offer. It has been such an incredible journey and I am so glad I get to go through life with you by my side, my partner in life, and my greatest achievement! I love you so much sayang ❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}