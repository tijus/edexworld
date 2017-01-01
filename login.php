<?php
session_start();

$uname=$_POST["userBox"];
$pswd=$_POST["passBox"];

include("config.php");
$sql="Select * from registrations where username ='".$uname."' and password='".$pswd."' and verify='Yes'";
echo $sql;
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($rows=$result->fetch_assoc())
{
$_SESSION["uname"]=$uname;
$_SESSION["id"]=$rows["id"];
$_SESSION["key"]=$rows["uniqueelement"];
// echo "Login successful";
header("Location:dashboard/index.php");
}
}
else
{
	//echo "Login unsuccessfull";
	header("Location:index.php?status=failure#login");
}
$conn->close();

?>