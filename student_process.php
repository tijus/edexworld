<?php

include("config.php");
$uniqueelement = $_POST['key'];
// escape variables for security of student
$academic = mysqli_real_escape_string($conn, $_POST['academic']);
$standard = mysqli_real_escape_string($conn, $_POST['standard']);
$schooladdress = mysqli_real_escape_string($conn, $_POST['schooladdress']);
$board = mysqli_real_escape_string($conn, $_POST['board']);
$maths_marksobt = mysqli_real_escape_string($conn, $_POST['maths_marksobt']);
$maths_marksexp = mysqli_real_escape_string($conn, $_POST['maths_marksexp']);
$opted_maths = mysqli_real_escape_string($conn,$_POST['opted_maths']);
$french_marksobt = mysqli_real_escape_string($conn, $_POST['french_marksobt']);
$french_marksexp = mysqli_real_escape_string($conn, $_POST['french_marksexp']);
$opted_french = mysqli_real_escape_string($conn,$_POST['opted_french']);
$science_marksobt = mysqli_real_escape_string($conn, $_POST['science_marksobt']);
$science_marksexp = mysqli_real_escape_string($conn, $_POST['science_marksexp']);
$opted_science = mysqli_real_escape_string($conn,$_POST['opted_science']);
$sst_marksobt = mysqli_real_escape_string($conn, $_POST['sst_marksobt']);
$sst_marksexp = mysqli_real_escape_string($conn, $_POST['sst_marksexp']);
$opted_sst = mysqli_real_escape_string($conn,$_POST['opted_sst']);
$english_marksobt = mysqli_real_escape_string($conn, $_POST['english_marksobt']);
$english_marksexp = mysqli_real_escape_string($conn, $_POST['english_marksexp']);
$opted_english = mysqli_real_escape_string($conn,$_POST['opted_english']);
$hindi_marksobt = mysqli_real_escape_string($conn, $_POST['hindi_marksobt']);
$hindi_marksexp = mysqli_real_escape_string($conn, $_POST['hindi_marksexp']);
$opted_hindi = mysqli_real_escape_string($conn,$_POST['opted_hindi']);
$marathi_marksobt = mysqli_real_escape_string($conn, $_POST['marathi_marksobt']);
$marathi_marksexp = mysqli_real_escape_string($conn, $_POST['marathi_marksexp']);
$opted_marathi = mysqli_real_escape_string($conn,$_POST['opted_marathi']);
$sanskrit_marksobt = mysqli_real_escape_string($conn, $_POST['sanskrit_marksobt']);
$sanskrit_marksexp = mysqli_real_escape_string($conn, $_POST['sanskrit_marksexp']);
$opted_sanskrit = mysqli_real_escape_string($conn,$_POST['opted_sanskrit']);
$others_marksobt = mysqli_real_escape_string($conn, $_POST['others_marksobt']);
$others_marksexp = mysqli_real_escape_string($conn, $_POST['others_marksexp']);
$opted_others = mysqli_real_escape_string($conn,$_POST['opted_others']);

    $sql="INSERT INTO student (uniqueelement, Academic,Standard, schooladdress, board, maths_marksobt, maths_marksexp, opted_maths,  french_marksobt, french_marksexp,opted_french,  science_marksobt, science_marksexp,opted_science,  sst_marksobt, sst_marksexp, opted_sst, english_marksobt, english_marksexp,opted_english,  hindi_marksobt, hindi_marksexp,opted_hindi,  marathi_marksobt, marathi_marksexp, opted_marathi, sanskrit_marksobt, sanskrit_marksexp, opted_sanskrit, others_marksobt, others_marksexp,opted_others )
VALUES ('$uniqueelement', '$academic','$standard', '$schooladdress', '$board','$maths_marksobt', '$maths_marksexp', '$opted_maths',  '$french_marksobt', '$french_marksexp','$opted_french',  '$science_marksobt', '$science_marksexp', '$opted_science', '$sst_marksobt', '$sst_marksexp', '$opted_sst',  '$english_marksobt', '$english_marksexp','$opted_english',  '$hindi_marksobt', '$hindi_marksexp','$opted_hindi',  '$marathi_marksobt', '$marathi_marksexp', '$opted_marathi', '$sanskrit_marksobt', '$sanskrit_marksexp','$opted_sanskrit',  '$others_marksobt', '$others_marksexp','$opted_others')";

    if ($conn->query($sql) === TRUE) {
		  header("Location:misc.php?key=".$uniqueelement);		
    } else {
        header("Location:student.php?status=failure");
    }


$conn->close();
?>