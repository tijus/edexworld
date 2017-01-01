<?php
include("config.php");
$pass=$_REQUEST['password'];
$email=$_REQUEST['email'];
$cat=$_REQUEST['cat'];
$new_token=$_REQUEST['new_token'];

/*$sql="Select * from registrations where email='$email' and token='$new_token'";

if($conn->query($sql) === FALSE)
{*/
    
$update=  "Update registrations set password = '$pass', confirm_password = '$pass', token='$new_token' where email='$email' and cat = '$cat'";

if ($conn->query($update) === TRUE) {

header ("Location:index.php?status=success&id=1#login");

}
else
{
header("Location:ret_pass.php?status=failure");
}
/*}
else
{
 header("Location:index.php?status=failure&id=1#login");
}*/

$conn->close();
 
?>	