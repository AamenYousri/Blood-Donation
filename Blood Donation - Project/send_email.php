<?php
function my_email(  $body  , $from_email , $from_name  , $to_email , $to_name ,$subject)
{
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true); // defaults to using php "mail()"

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->CharSet = 'UTF-8';
    $mail->Host       = "smtp.mailtrap.io"; // SMTP server
    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 2525;
   
  //  $mail->SMTPSecure = "tsl"; // set the SMTP port for the GMAIL server
    $mail->Username   = "c1bbaf4e8c9c01"; // SMTP account username
    $mail->Password   = "87c091ddbfac0a";        // SMTP account password
    $mail->ContentType = 'text/plain';

    $mail->SetFrom($from_email, $from_name);

    $address = $to_email;
    $mail->AddAddress($address, $to_name);

    $mail->Subject    = $subject;

    $mail->MsgHTML($body);
    $mail->Send();
    /*
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }*/
}

