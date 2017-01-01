<?php
include("config.php");

$key=$_GET['key'];
$value=$_GET['value'];
$sql_select=  "Select * from registrations where uniqueelement = '$key' and id = '$value'";
echo $sql_select;
$result = $conn->query($sql_select);
if ($result->num_rows > 0) {

    
    $update=  "Update registrations set verify='Yes' where uniqueelement='$key' and id = '$value'";
echo $update;

$update_result = $conn->query($update);
header ("Location:index.php?status=OK#login");

if ($conn->query($update_result) === TRUE) {

header ("Location:index.php?status='OK'#login");
exit;
}
  }

 
?>	