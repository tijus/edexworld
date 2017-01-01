<?php

session_start();
$uname = $_SESSION['username'];
$birthdate = $_SESSION['birthdate'];
date_default_timezone_set("Asia/Kolkata");
$date = new DateTime();
$today = $date->format('Y-m-d H:i:s');
$user_id = $_SESSION['user_id'];

$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM answers WHERE user_id='$user_id'";
$result = $conn->query($sql);
$sum = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //print_r($row);
        $sum = $row['q1'] + $row['q2'] + $row['q3'] + $row['q4'] + $row['q5'] + $row['q6'] + $row['q7'] + $row['q8'] + $row['q9'] + $row['q10'] + $row['q11'] + $row['q12'] + $row['q13'] + $row['q14'] + $row['q15'] + $row['q16'] + $row['q17'] + $row['q18'] + $row['q19'] + $row['q20'] + $row['q21'] + $row['q22'] + $row['q23'] + $row['q24'] + $row['q25'] + $row['q26'] + $row['q27'] + $row['q28'] + $row['q29'] + $row['q30'] + 2 + $row['q33'] + $row['q34'] + $row['q35'] + $row['q36'] + $row['q37'] + $row['q38'] + $row['q39'] + $row['q40'] + $row['q41'] + $row['q42'] + $row['q43'] + $row['q44'] + $row['q45'] + $row['q46'] + $row['q47'] + $row['q48'] + $row['q49'] + $row['q50'] + $row['q51'];
        /*echo '<head><title>Your Score</title>';
        include("header.php");
        echo '</head>';
        echo '<style type="text/css">.bs-example{margin: 20px;}</style>';
        echo '<body style="background-color:#A8E3E3">';
        echo '<div class="bs-example"><div id="myModal" class="modal fade"><div class="modal-dialog"><div class="modal-content">';
        echo '<div class="modal-header"><h4 class="modal-title">Congratulations! You have completed the test.</h4></div>';
        echo '<div class="modal-body"><h3>Your score is ' . $sum . '%</h1></div>';
        echo '</div></div></div></div>';
        echo "</body>";*/
        $insert_sum = "UPDATE answers SET sum = '$sum' WHERE user_id = '$user_id'";
        $conn->query($insert_sum);
        header("Location:pdf-score.php?sum=".$sum);
    }
} else {
    echo $user_id;
    header("");
}
$conn->close();
?>