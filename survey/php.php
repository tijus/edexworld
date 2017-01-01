<?php

session_start();
$uname = $_SESSION['username'];
$birthdate = $_SESSION['birthdate'];
$standard = $_SESSION['standard'];
$section = $_SESSION['section'];
$roll_no = $_SESSION['roll_no'];
$school = $_SESSION['school'];
$syl = $_SESSION['syl'];
$society = $_SESSION['soc'];
$res_area = $_SESSION['area'];
$mail = $_SESSION['mail'];
$contact = $_SESSION['contact'];
$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$name = mysqli_real_escape_string($con, $uname);
$dob = mysqli_real_escape_string($con, $birthdate);
$class = mysqli_real_escape_string($con, $standard);
$sec = mysqli_real_escape_string($con, $section);
$rn = mysqli_real_escape_string($con, $roll_no);
$sch = mysqli_real_escape_string($con, $school);
$syllabus = mysqli_real_escape_string($con, $syl);
$soc = mysqli_real_escape_string($con, $society);
$area = mysqli_real_escape_string($con, $res_area);
$email = mysqli_real_escape_string($con, $mail);
$phone = mysqli_real_escape_string($con, $contact);
date_default_timezone_set("Asia/Kolkata");
$date = new DateTime();
$today = $date->format('Y-m-d H:i:s');
$counter1 = 0;
$counter2 = 0;
$counter3 = 0;

if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) && isset($_POST['q10']) && isset($_POST['q11']) && isset($_POST['q12']) && isset($_POST['q13']) && isset($_POST['q14']) && isset($_POST['q15']) && isset($_POST['q16']) && isset($_POST['q17']) && isset($_POST['q18']) && isset($_POST['q19']) && isset($_POST['q20']) && isset($_POST['q21']) && isset($_POST['q22']) && isset($_POST['q23']) && isset($_POST['q24']) && isset($_POST['q25']) && isset($_POST['q26']) && isset($_POST['q27']) && isset($_POST['q28']) && isset($_POST['q29']) && isset($_POST['q30']) && isset($_POST['q31']) && isset($_POST['q32']) && isset($_POST['q33']) && isset($_POST['q34']) && isset($_POST['q35']) && isset($_POST['q36']) && isset($_POST['q37']) && isset($_POST['q38']) && isset($_POST['q39']) && isset($_POST['q40']) && isset($_POST['q41']) && isset($_POST['q42']) && isset($_POST['q43']) && isset($_POST['q44']) && isset($_POST['q45']) && isset($_POST['q46']) && isset($_POST['q47']) && isset($_POST['q48']) && isset($_POST['q49']) && isset($_POST['q50']) && isset($_POST['q51']) && isset($_POST['q52'])) {
    $a1 = $_POST['q1'];
    $a2 = $_POST['q2'];
    $a3 = $_POST['q3'];
    $a4 = $_POST['q4'];
    $a5 = $_POST['q5'];
    $a6 = $_POST['q6'];
    $a7 = $_POST['q7'];
    $a8 = $_POST['q8'];
    $a9 = $_POST['q9'];
    $a10 = $_POST['q10'];
    $a11 = $_POST['q11'];
    $a12 = $_POST['q12'];
    $a13 = $_POST['q13'];
    $a14 = $_POST['q14'];
    $a15 = $_POST['q15'];
    $a16 = $_POST['q16'];
    $a17 = $_POST['q17'];
    $a18 = $_POST['q18'];
    $a19 = $_POST['q19'];
    $a20 = $_POST['q20'];
    $a21 = $_POST['q21'];
    $a22 = $_POST['q22'];
    $a23 = $_POST['q23'];
    $a24 = $_POST['q24'];
    $a25 = $_POST['q25'];
    $a26 = $_POST['q26'];
    $a27 = $_POST['q27'];
    $a28 = $_POST['q28'];
    $a29 = $_POST['q29'];
    $a30 = $_POST['q30'];
    $a31 = $_POST['q31'];
    $a32 = $_POST['q32'];
    $a33 = $_POST['q33'];
    $a34 = $_POST['q34'];
    $a35 = $_POST['q35'];
    $a36 = $_POST['q36'];
    $a37 = $_POST['q37'];
    $a38 = $_POST['q38'];
    $a39 = $_POST['q39'];
    $a40 = $_POST['q40'];
    $a41 = $_POST['q41'];
    $a42 = $_POST['q42'];
    $a43 = $_POST['q43'];
    $a44 = $_POST['q44'];
    $a45 = $_POST['q45'];
    $a46 = $_POST['q46'];
    $a47 = $_POST['q47'];
    $a48 = $_POST['q48'];
    $a49 = $_POST['q49'];
    $a50 = $_POST['q50'];
    $a51 = $_POST['q51'];
    $a52 = $_POST['q52'];
}

$sql_users = "INSERT INTO users( `name`, `dob`, `class`, `section`, `roll_no`, `school`, `syllabus`, `society`, `area`, `email`, `contact`,`time`)
		VALUES( '$name', '$dob', '$class', '$sec', '$rn', '$sch', '$syllabus', '$soc', '$area', '$email', '$phone', '$today')";
$con->query($sql_users);
$sql_id = "SELECT id, class FROM users WHERE name = '$name' AND time = '$today'";
$res_id = $con->query($sql_id);
if ($res_id->num_rows > 0) {
    while ($row = $res_id->fetch_assoc()) {
        $user_id = $row['id'];
        $class = $row['class'];
    }
}
echo $user_id;
$_SESSION['user_id'] = $user_id;

$sql_answers = "INSERT INTO answers(user_id, class, school, society, area, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, q41, q42, q43, q44, q45, q46, q47, q48, q49, q50, q51, q52, time) "
        . "VALUES('$user_id', '$class', '$sch', '$soc', '$area', '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16', '$a17', '$a18', '$a19', '$a20', '$a21', '$a22', '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29', '$a30', '$a31', '$a32', '$a33', '$a34', '$a35', '$a36', '$a37', '$a38', '$a39', '$a40', '$a41', '$a42', '$a43', '$a44', '$a45', '$a46', '$a47', '$a48', '$a49', '$a50', '$a51', '$a52', '$today')";
$con->query($sql_answers);

$sql_school = "SELECT name FROM school";
$res_school = mysqli_query($con, $sql_school) or die(mysqli_error($con));
while($row_school = mysqli_fetch_assoc($res_school)){
    switch ($row_school['name']){
        case $sch:
            $counter1 = 1;
            break;
    }
}
if($counter1 != 1){
    $sql_inschool = "INSERT INTO school(name) VALUES('$sch')";
    $con->query($sql_inschool);
}

if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) && isset($_POST['q10']) && isset($_POST['q11']) && isset($_POST['q12']) && isset($_POST['q13']) && isset($_POST['q14']) && isset($_POST['q15']) && isset($_POST['q16']) && isset($_POST['q17']) && isset($_POST['q18']) && isset($_POST['q19']) && isset($_POST['q20']) && isset($_POST['q21']) && isset($_POST['q22']) && isset($_POST['q23']) && isset($_POST['q24']) && isset($_POST['q25']) && isset($_POST['q26']) && isset($_POST['q27']) && isset($_POST['q28']) && isset($_POST['q29']) && isset($_POST['q30']) && isset($_POST['q31']) && isset($_POST['q32']) && isset($_POST['q33']) && isset($_POST['q34']) && isset($_POST['q35']) && isset($_POST['q36']) && isset($_POST['q37']) && isset($_POST['q38']) && isset($_POST['q39']) && isset($_POST['q40']) && isset($_POST['q41']) && isset($_POST['q42']) && isset($_POST['q43']) && isset($_POST['q44']) && isset($_POST['q45']) && isset($_POST['q46']) && isset($_POST['q47']) && isset($_POST['q48']) && isset($_POST['q49']) && isset($_POST['q50']) && isset($_POST['q51']) && isset($_POST['q52'])) {
    header('Location:score.php?id=' . rand(1000, 9999) . '&r=' . $_SESSION['username'] . '&alt=' . rand(10010, 10000000));
} else {
    header("Location:ALERT.php");
}


mysqli_close($con);
?>