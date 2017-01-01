<?php
require_once 'lib/class.phpmailer.php';
include("encryption.php");
include("config.php");
$key = $_REQUEST['key'];
$email = $_REQUEST['email'];
$confirm_email = $_REQUEST['confirm_email'];
$cat = $_REQUEST['cat'];

if(!isset($email))
{
$email = $confirm_email;
}


$sql="Select * from registrations where email ='".$email."' and cat='".$cat."'";

$result=$conn->query($sql);
if($result->num_rows>0)
{
while($rows=$result->fetch_assoc())
{

$mail = new PHPMailer();
 
// HTML body
 
$body = "</pre>
<div>";
$body .= " Dear User,<br>
";
$body .= "&nbsp;&nbsp;&nbsp;Please click <a href='http://www.edexworld.com/setpassword.php?id=".encryptIt($rows['email'])."&cat=".$cat."&new_token=".$key."'>here</a> to set your password.<br><br>
";
$body .= "Warm Regards,<br>
";
$body .= "<b>EDEXWORLD EMPOWERMENT PVT. LTD. </b> ";
$body .= "</div>" ;
 

 
$mail->AddAddress($email, "My-webpage Website");
$mail->Subject = "Renew Password";
$mail->MsgHTML($body);

  if(!$mail->Send()) {
  echo "There was an error sending the message";
  exit;
  }
else
{
  	header("Location:ret_pass.php?status=success");
}
}
}
else
{

	header("Location:ret_pass.php?key=".$key."&status=failure");
}
$conn->close();

?>