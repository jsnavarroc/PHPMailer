<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug  = 4;     // enables SMTP debug information (for testing)
                           // 1 = errors and messages
                           // 2 = messages only
                           // 4 = Errores de coneccion

//Le indico a la clase que utilice SMTP
$mail->isSMTP();                                      // Set mailer to use SMTP

//Se hace una autenticación SMTP
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//Indico el servidor de gmail para SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//Indico el puerto que utiliza gmail
$mail->Port = 465;

$mail->Username = 'gaia.pruebas@gmail.com';                 // SMTP username
$mail->Password = 'Gaia#1234';                           // SMTP password
                                    // TCP port to connect to

$mail->setFrom('gaia.pruebas@gmail.com', 'Mailer');
$mail->addAddress('21sebas12@gmail.com', 'Johan User');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
 ?>
