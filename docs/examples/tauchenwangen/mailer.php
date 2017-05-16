<?php
require '/inc/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';  // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = 'postmaster@localhost';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('admin@localhost', 'Lowa GmbH Kontaktformular');
$mail->addAddress('newuser@localhost', 'Test User');     // Add a recipient
$mail->addReplyTo('postmaster@localhost', 'Information');
$mail->addCC('postmaster@localhost');
$mail->addBCC('postmaster@localhosts');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/img/logo.png', 'logo');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'E-Mail mit Bild';
$mail->Body    = '<img src="http://lowa/img/logo.png" />';
$mail->AltBody = 'Vielen Dank für Ihre Nachricht';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}