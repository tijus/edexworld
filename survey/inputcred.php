<?php
session_start();
{
	$name =  $_POST['name'];
	$dob =  $_POST['dob'];
	$class =  $_POST['class'];
        $section =  $_POST['section'];
        $roll_no =  $_POST['roll_no'];
        $school =  $_POST['school'];
	$syllabus = $_POST['syllabus'];
	$society = $_POST['society'];
	$area = $_POST['area'];
	$email =  $_POST['email'];
	$phone =  $_POST['phone'];
	$_SESSION['username']=$name;
	$_SESSION['birthdate']=$dob;
	$_SESSION['standard']=$class;
        $_SESSION['section']=$section;
        $_SESSION['roll_no']=$roll_no;
        $_SESSION['school']=$school;
	$_SESSION['syl']=$syllabus;
	$_SESSION['soc']=$society;
	$_SESSION['area']=$area;
	$_SESSION['mail']=$email;
	$_SESSION['contact']=$phone;
	
	header('Location:survey.php?id='.rand(1000,9999).'&r='.$_SESSION['username'].'&alt='.rand(10010,10000000));
}
?>
