<?php
require_once 'lib/class.phpmailer.php';

include("config.php");
$uniqueelement = $_POST['key'];
// escape variables for security for all
$comments = mysqli_real_escape_string($conn, $_POST['comments']);
$suggestions = mysqli_real_escape_string($conn, $_POST['suggestions']);
$expt_handwriting = mysqli_real_escape_string($conn, $_POST['expt_handwriting']);
$expt_problem_solving = mysqli_real_escape_string($conn, $_POST['expt_problem_solving']);
$expt_weekly_monthly_test = mysqli_real_escape_string($conn, $_POST['expt_weekly_monthly_test']);
$expt_homework = mysqli_real_escape_string($conn, $_POST['expt_homework']);
$expt_daily_tracking = mysqli_real_escape_string($conn, $_POST['expt_daily_tracking']);
$know_hoarding = mysqli_real_escape_string($conn, $_POST['know_hoarding']);
$know_handwill = mysqli_real_escape_string($conn, $_POST['know_handwill']);
$know_letter_email = mysqli_real_escape_string($conn, $_POST['know_letter_email']);
$know_recommendation = mysqli_real_escape_string($conn, $_POST['know_recommendation']);
$know_internet = mysqli_real_escape_string($conn, $_POST['know_internet']);
$know_newspaper = mysqli_real_escape_string($conn, $_POST['know_newspaper']);
$know_seminar = mysqli_real_escape_string($conn, $_POST['know_seminar']);
$know_friends = mysqli_real_escape_string($conn, $_POST['know_friends']);
$know_others = mysqli_real_escape_string($conn, $_POST['know_others']);

    $sql_for_all="INSERT INTO for_all (uniqueelement, comments,suggestions, expt_handwriting, expt_problem_solving, expt_weekly_monthly_test, expt_homework, expt_daily_tracking, know_hoarding, know_handwill, know_letter_email, know_recommendation, know_internet, know_newspaper, know_seminar, know_friends, know_others) 
VALUES ('$uniqueelement', '$comments','$suggestions', '$expt_handwriting', '$expt_problem_solving', '$expt_weekly_monthly_test', '$expt_homework', '$expt_daily_tracking', '$know_hoarding', '$know_handwill', '$know_letter_email', '$know_recommendation', '$know_internet', '$know_newspaper', '$know_seminar', '$know_friends', '$know_others')";



    if ($conn->query($sql_for_all) === TRUE) {
      $sql_select=  "Select * from registrations where uniqueelement = '$uniqueelement'";
$result = $conn->query($sql_select);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $email=$row["email"];
      $id=$row["id"];


$mail = new PHPMailer();
 
// HTML body
 
$body = "</pre>
<div>";
$body .= " Dear User,<br>
";
$body .= "&nbsp;&nbsp;&nbsp;Please click <a href='http://www.edexworld.com/verify.php?key=".$uniqueelement."&value=".$id."'>here</a> to verify your email.<br><br>
";
$body .= "Warm Regards,<br>
";
$body .= "<b>EDEXWORLD EMPOWERMENT PVT. LTD. </b> ";
$body .= "</div>" ;
 
// And the absolute required configurations fopen(filename, mode)r sending HTML with attachement
 
$mail->AddAddress($email, "My-webpage Website");
$mail->Subject = "verify email";
$mail->MsgHTML($body);

  if(!$mail->Send()) {
  echo "There was an error sending the message";
  exit;
  }
}
} else {
    echo "Error fetching data from database. Contact Administrator.";
}
      header("Location:index.php?status=verify#login");
    }
      else {
        header("Location:misc.php?status=failure");

    }
  
  $conn->close();
?>
