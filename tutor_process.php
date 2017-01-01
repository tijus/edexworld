<?php

include("config.php");
$uniqueelement = $_POST['key'];
// escape variables for security of tutor
$x_university = mysqli_real_escape_string($conn, $_POST['x_university']);
$x_score = mysqli_real_escape_string($conn, $_POST['x_score']);
$xii_university = mysqli_real_escape_string($conn, $_POST['xii_university']);
$xii_score = mysqli_real_escape_string($conn, $_POST['xii_score']);
$certificate_university = mysqli_real_escape_string($conn, $_POST['certificate_university']);
$certificate_score = mysqli_real_escape_string($conn, $_POST['certificate_score']);
$diploma_university = mysqli_real_escape_string($conn,$_POST['diploma_university']);
$diploma_score = mysqli_real_escape_string($conn, $_POST['diploma_score']);
$grads = mysqli_real_escape_string($conn, $_POST['grads']);
$grads_university = mysqli_real_escape_string($conn,$_POST['grads_university']);
$grads_score = mysqli_real_escape_string($conn, $_POST['grads_score']);
$post_grads = mysqli_real_escape_string($conn, $_POST['post_grads']);
$post_grads_university = mysqli_real_escape_string($conn,$_POST['post_grads_university']);
$post_grads_score = mysqli_real_escape_string($conn, $_POST['post_grads_score']);
$prof = mysqli_real_escape_string($conn, $_POST['prof']);
$prof_university = mysqli_real_escape_string($conn,$_POST['prof_university']);
$prof_score = mysqli_real_escape_string($conn, $_POST['prof_score']);
$research = mysqli_real_escape_string($conn, $_POST['research']);
$research_university = mysqli_real_escape_string($conn,$_POST['research_university']);
$research_score = mysqli_real_escape_string($conn, $_POST['research_score']);
$cert = mysqli_real_escape_string($conn, $_POST['cert']);
$f_e_university = mysqli_real_escape_string($conn,$_POST['f_e_university']);
$f_e_score = mysqli_real_escape_string($conn, $_POST['f_e_score']);
$hobby = mysqli_real_escape_string($conn, $_POST['hobby']);
$work_experience = mysqli_real_escape_string($conn,$_POST['work_experience']);
$maths_fees = mysqli_real_escape_string($conn, $_POST['maths_fees']);
$opted_maths_tutor = mysqli_real_escape_string($conn, $_POST['opted_maths_tutor']);
$french_fees = mysqli_real_escape_string($conn,$_POST['french_fees']);
$opted_french_tutor = mysqli_real_escape_string($conn, $_POST['opted_french_tutor']);
$science_fees = mysqli_real_escape_string($conn, $_POST['science_fees']);
$opted_science_tutor = mysqli_real_escape_string($conn,$_POST['opted_science_tutor']);
$sst_fees = mysqli_real_escape_string($conn, $_POST['sst_fees']);
$opted_sst_tutor = mysqli_real_escape_string($conn, $_POST['opted_sst_tutor']);
$english_fees = mysqli_real_escape_string($conn, $_POST['english_fees']);
$opted_english_tutor = mysqli_real_escape_string($conn, $_POST['opted_english_tutor']);
$hindi_fees = mysqli_real_escape_string($conn, $_POST['hindi_fees']);
$opted_hindi_tutor = mysqli_real_escape_string($conn, $_POST['opted_hindi_tutor']);
$marathi_fees = mysqli_real_escape_string($conn,$_POST['marathi_fees']);
$opted_marathi_tutor = mysqli_real_escape_string($conn, $_POST['opted_marathi_tutor']);
$sanskrit_fees = mysqli_real_escape_string($conn, $_POST['sanskrit_fees']);
$opted_sanskrit_tutor = mysqli_real_escape_string($conn,$_POST['opted_sanskrit_tutor']);
$others_fees = mysqli_real_escape_string($conn, $_POST['others_fees']);
$opted_others_tutor = mysqli_real_escape_string($conn, $_POST['opted_others_tutor']);
$opted_maths_teach = mysqli_real_escape_string($conn,$_POST['opted_maths_teach']);
$opted_french_teach = mysqli_real_escape_string($conn, $_POST['opted_french_teach']);
$opted_science_teach = mysqli_real_escape_string($conn, $_POST['opted_science_teach']);
$opted_sst_teach = mysqli_real_escape_string($conn,$_POST['opted_sst_teach']);
$opted_english_teach = mysqli_real_escape_string($conn, $_POST['opted_english_teach']);
$opted_hindi_teach = mysqli_real_escape_string($conn, $_POST['opted_hindi_teach']);
$opted_marathi_teach = mysqli_real_escape_string($conn,$_POST['opted_marathi_teach']);
$opted_sanskrit_teach = mysqli_real_escape_string($conn, $_POST['opted_sanskrit_teach']);
$opted_others_teach = mysqli_real_escape_string($conn, $_POST['opted_others_teach']); 

    $sql_tutor="INSERT INTO tutor (uniqueelement, x_university,x_score, xii_university, xii_score, certificate_university, certificate_score, diploma_university,  diploma_score, grads,grads_university,  grads_score, post_grads,post_grads_university,  post_grads_score, prof, prof_university, prof_score, research,research_university,  research_score, cert,f_e_university,  f_e_score, hobby, work_experience, maths_fees, opted_maths_tutor, french_fees, opted_french_tutor, science_fees,opted_science_tutor, sst_fees, opted_sst_tutor, english_fees, opted_english_tutor, hindi_fees, opted_hindi_tutor, marathi_fees, opted_marathi_tutor, sanskrit_fees, opted_sanskrit_tutor, others_fees, opted_others_tutor, opted_maths_teach, opted_french_teach, opted_science_teach, opted_sst_teach, opted_english_teach, opted_hindi_teach, opted_marathi_teach, opted_sanskrit_teach, opted_others_teach)

VALUES ('$uniqueelement', '$x_university','$x_score', '$xii_university', '$xii_score','$certificate_university', '$certificate_score', '$diploma_university',  '$diploma_score', '$grads','$grads_university',  '$grads_score', '$post_grads', '$post_grads_university', '$post_grads_score', '$prof', '$prof_university',  '$prof_score', '$research','$research_university',  '$research_score', '$cert','$f_e_university',  '$f_e_score', '$hobby', '$work_experience', '$maths_fees', '$opted_maths_tutor','$french_fees',  '$opted_french_tutor', '$science_fees','$opted_science_tutor', '$sst_fees', '$opted_sst_tutor', '$english_fees', '$opted_english_tutor', '$hindi_fees', '$opted_hindi_tutor', '$marathi_fees', '$opted_marathi_tutor', '$sanskrit_fees', '$opted_sanskrit_tutor', '$others_fees', '$opted_others_tutor', '$opted_maths_teach', '$opted_french_teach', '$opted_science_teach', '$opted_sst_teach', '$opted_english_teach', '$opted_hindi_teach', '$opted_marathi_teach', '$opted_sanskrit_teach', '$opted_others_teach')";


    if ($conn->query($sql_tutor) === TRUE) {
		  header("Location:misc.php?key=".$uniqueelement);		
    } else {
        header("Location:tutor.php?status=failure");
}


$conn->close();
?>