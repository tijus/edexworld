<?php 
require_once 'class.phpmailer.php';
$mail = new PHPMailer();
// Now you only need to add the necessary stuff
 
// HTML body
 
$body = "</pre>
<div>";
$body .= " Hello Dimitrios
";
$body .= "<i>Your</i> personal photograph to this message.
";
$body .= "Sincerely,
";
$body .= "phpmailer test message ";
$body .= "</div>" ;
 
// And the absolute required configurations for sending HTML with attachement
 
$mail->AddAddress("tijussingh@gmail.com", "My-webpage Website");
$mail->Subject = "test for phpmailer-3";
$mail->MsgHTML($body);
$mail->AddAttachment("afsdsf Singh13062015121543pm.pdf");
$mail->AddAttachment("Penguins.jpg");
if(!$mail->Send()) {
echo "There was an error sending the message";
exit;
}
echo "Message was sent successfully";
 
?>