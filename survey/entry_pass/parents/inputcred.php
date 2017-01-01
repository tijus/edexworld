<?php

session_start();
$name = $_POST['name'];
$dob = $_POST['dob'];
$company = $_POST['company'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$locality = $_POST['locality'];
$society = $_POST['society'];
$flat = $_POST['flat'];
$phone = $_POST['phone'];
$_SESSION['username'] = $name;
$_SESSION['birthdate'] = $dob;
$_SESSION['company'] = $company;
$_SESSION['designation'] = $designation;
$_SESSION['email'] = $email;
$_SESSION['locality'] = $locality;
$_SESSION['society'] = $society;
$_SESSION['flat'] = $flat;
$_SESSION['contact'] = $phone;
$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql_insert = "INSERT INTO entry_pass_parents(name, dob, company, designation, email, locality, society, flat, contact)"
        . "VALUES('$name', '$dob', '$company', '$designation', '$email', '$locality', '$society', '$flat', '$phone')";
mysqli_query($con, $sql_insert);

mysqli_close($con);
?>
