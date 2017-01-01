<?php

session_start();
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$dob = $_POST['dob'];
$class = $_POST['class'];
$school = $_POST['school'];
$syllabus = $_POST['syllabus'];
$locality = $_POST['locality'];
$society = $_POST['society'];
$flat = $_POST['flat'];
$phone = $_POST['phone'];
$_SESSION['username'] = $name;
$_SESSION['birthdate'] = $dob;
$_SESSION['standard'] = $class;
$_SESSION['school'] = $school;
$_SESSION['syl'] = $syllabus;
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

$sql_insert = "INSERT INTO entry_pass_students(name, father_name, dob, standard, school, syllabus, locality, society, flat, contact)"
        . "VALUES('$name', '$father_name', '$dob', '$class', '$school', '$syllabus', '$locality', '$society', '$flat', '$phone')";
mysqli_query($con, $sql_insert);

mysqli_close($con);
?>
