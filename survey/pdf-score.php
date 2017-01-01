<?php

require("fpdf/fpdf.php");
require_once 'class.phpmailer.php';

class PDF extends FPDF {

    //Page footer
    function Footer() {
        //Position at 1.5 cm from bottom
        $this->SetY(-20);
        //Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        //Page number
        $this->Cell(0, 7, 'Page ' . $this->PageNo() . '/{nb}', 0, 1, 'C');
        //Line
        $this->Line(5, 284, 205, 284);
        //Information
        $this->Cell(48, 5, 'Edexworld Empowerment Pvt. Ltd.', 0, 0, 'C');
        $this->Cell(48, 5, 'Contact: 9833631395/8108955692', 0, 0, 'C');
        $this->Cell(48, 5, 'Email: edexworld@yahoo.com', 0, 0, 'C');
        $this->Cell(48, 5, 'Website: www.edexworld.org', 0, 0, 'C');
    }

}

session_start();
$sum = $_GET['sum'];
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 12);
$pdf->AddPage();

$user_infosql = "SELECT * FROM users WHERE id = '$user_id'";
$user_infores = mysqli_query($conn, $user_infosql) or die(mysqli_error($conn));
while ($user_inforow = mysqli_fetch_assoc($user_infores)) {
    $name = $user_inforow['name'];
    $dob = $user_inforow['dob'];
    $class = $user_inforow['class'];
    $section = $user_inforow['section'];
    $roll_no = $user_inforow['roll_no'];
    $school = $user_inforow['school'];
    $syllabus = $user_inforow['syllabus'];
    $society = $user_inforow['society'];
    $area = $user_inforow['area'];
    $email = $user_inforow['email'];
    $date = $user_inforow['time'];
}

$pdf->Cell(63, 8, 'Name: ' . $name, 'LT');
$pdf->Cell(63, 8, 'DOB: ' . $dob, 'T');
$pdf->Cell(64, 8, 'Class: ' . $class, 'RT', 1);
$pdf->Cell(63, 8, 'Section: ' . $section, 'L');
$pdf->Cell(63, 8, 'Roll No: ' . $roll_no);
$pdf->Cell(64, 8, 'School: ' . $school, 'R', 1);
$pdf->Cell(63, 8, 'Syllabus: ' . $syllabus, 'LB');
$pdf->Cell(63, 8, 'Society: ' . $society, 'B');
$pdf->Cell(64, 8, 'Area: ' . $area, 'RB', 1);

$pdf->Cell(0, 10, 'Date & Time: ' . $date, 0, 1);

$pdf->Cell(0, 10, 'EDUCATIONAL SURVEY REPORT', 0, 1, 'C');
$pdf->Cell(0, 1, '(Self Awareness, Learning Style and Self-Study)', 0, 1, 'C');
$pdf->Cell(0, 2, '', 0, 1);
$pdf->Cell(0, 10, 'Congratulations! You have completed the test.', 0, 1, 'C');
$pdf->Cell(0, 2, 'Your score is ' . $sum, 0, 1, 'C');
$pdf->Cell(0, 5, '', 0, 1);

$querysql = "SELECT * FROM answers WHERE user_id='$user_id'";
$queryres = mysqli_query($conn, $querysql) or die(mysqli_error($conn));
while ($queryrow = mysqli_fetch_assoc($queryres)) {
    $a1 = $queryrow['q1'];
    $a2 = $queryrow['q2'];
    $a3 = $queryrow['q3'];
    $a4 = $queryrow['q4'];
    $a5 = $queryrow['q5'];
    $a6 = $queryrow['q6'];
    $a7 = $queryrow['q7'];
    $a8 = $queryrow['q8'];
    $a9 = $queryrow['q9'];
    $a10 = $queryrow['q10'];
    $a11 = $queryrow['q11'];
    $a12 = $queryrow['q12'];
    $a13 = $queryrow['q13'];
    $a14 = $queryrow['q14'];
    $a15 = $queryrow['q15'];
    $a16 = $queryrow['q16'];
    $a17 = $queryrow['q17'];
    $a18 = $queryrow['q18'];
    $a19 = $queryrow['q19'];
    $a20 = $queryrow['q20'];
    $a21 = $queryrow['q21'];
    $a22 = $queryrow['q22'];
    $a23 = $queryrow['q23'];
    $a24 = $queryrow['q24'];
    $a25 = $queryrow['q25'];
    $a26 = $queryrow['q26'];
    $a27 = $queryrow['q27'];
    $a28 = $queryrow['q28'];
    $a29 = $queryrow['q29'];
    $a30 = $queryrow['q30'];
    $a31 = $queryrow['q31'];
    $a32 = $queryrow['q32'];
    $a33 = $queryrow['q33'];
    $a34 = $queryrow['q34'];
    $a35 = $queryrow['q35'];
    $a36 = $queryrow['q36'];
    $a37 = $queryrow['q37'];
    $a38 = $queryrow['q38'];
    $a39 = $queryrow['q39'];
    $a40 = $queryrow['q40'];
    $a41 = $queryrow['q41'];
    $a42 = $queryrow['q42'];
    $a43 = $queryrow['q43'];
    $a44 = $queryrow['q44'];
    $a45 = $queryrow['q45'];
    $a46 = $queryrow['q46'];
    $a47 = $queryrow['q47'];
    $a48 = $queryrow['q48'];
    $a49 = $queryrow['q49'];
    $a50 = $queryrow['q50'];
    $a51 = $queryrow['q51'];
}

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(11, 5, '1');
switch ($a1) {
    case 1:
        $pdf->Cell(0, 5, 'I have no role models at present.', 0, 1);
        break;
    case 2:
        $pdf->Cell(0, 5, 'I have various role models.', 0, 1);
        break;
    case 3:
        $pdf->Cell(0, 5, 'I wish to prove myself by being my own role model.', 0, 1);
        break;
    case 4:
        $pdf->Cell(0, 5, 'My parents are my role models.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You need to know your skill and talent and aspire to play the roles of any successful person in your area of concern.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '2');
switch ($a2) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am not worthy enough so that people may respect me.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'People should respect me because I respect them.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'We have been gifted with special talent and genius within us with individual difference, so we should give due respect to each and everyone.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '3');
switch ($a3) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I can’t understand the reason for fewer marks in my exam even if I try my best.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I know my weak points and I will improve scoring higher.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Scoring high is the academic excellence test which is important but we can achieve our goals through positive and proactive efforts commitedly.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '4');
switch ($a4) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I don\'t help my friend always because he/she becomes dependent on me.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am not intelligent enough to support my friends in studies.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I help my classmates, so he/she also supports me.', 0, 1);
        break;
    case 4:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I support my classmates when he/she is in need of my real support.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Helping is for the disables so we should support the others inducing to help themselves.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '5');
switch ($a5) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am not generally offended when teased as this is their lookout.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I become nervous when my friends tease me.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'We should believe ourselves from within without underestimating ourselves. No one can ever devaluate us.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '6');
switch ($a6) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I listen to people but don’t always give any opinion of my own.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I listen to people and give my logical opinions amiably.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'First understand yourself to be understood for being highly effective in your life.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '7');
switch ($a7) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Mostly I am unable to find alternative solutions to various problems.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I often find various solutions for a specific problem. ', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Problems are always there naturally in every now and then. The good thing is that there are numerous solutions and options to be explored.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '8');
switch ($a8) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am not always able to express my own independent views. ', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I mostly express my own views on the particular issue. ', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Listen to everyone but act upon to the best and suitable opinion of others. Think independently and express your views not to please or satisfy others.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '9');
switch ($a9) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I can imagine but can’t express in writing.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I may express my imagination power in writing, too.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Thinking, imagination and vision are the special attributes of human life. So successful life needs their execution.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '10');
switch ($a10) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I have not thought of my career goals yet.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I want to be a professional/businessman/ government employee in my career.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Make academic and career goals of your own life and strive for it.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '11');
switch ($a11) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I don’t take decisions of my own; I need support in my daily life. ', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I take decisions logically; form my own opinions and act accordingly.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Take logical and critical decision yourself for individual and social success.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '12');
switch ($a12) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I get disturbed and become afraid of the problems in my studies.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I consider problems as the opportunity to succeed and I think of alternatives to solve my problems in studies.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Problems and hurdles in life are the test for getting success if you overcome. It is the stepping stone, not the stopping stone.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '13');
switch ($a13) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I hesitate in expressing my feelings to others.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I communicate with others freely and friendly.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Be clean, free, friendly, logical and realistic in communicating others.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '14');
switch ($a14) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am scared to talk with my peers and teachers.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I interact with my peers and teachers cheerfully and friendly.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Being open and cheerful is a fascinating personality to get favourable response of others.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '15');
switch ($a15) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am disturbed and become hopeless in adverse situations.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I react positively and remain calm under adverse situations.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Being balanced, calm, patient in abnormal situations is always rewarding in personal victory.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '16');
switch ($a16) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I remain quiet in my class but bold on the playground and outside.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I rarely participate in the discussion in my class and prefer to communicate face-to-face.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I often listen to and speak easily and effortlessly in my class.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Listening, speaking and acting should be done in sequence.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '17');
switch ($a17) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I enjoy outdoor games and sporting events as my hobby.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I love to give time on computer, video games and TV sports as my hobby.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am chosen for leading roles in school programs and love to read books as my hobby.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Happy is a person who makes his hobby a profession. So computing skill, reading, writing, music, dance and various such things are helpful for you in the future.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '18');
switch ($a18) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I present my homework casually and sometimes incomplete.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I present my homework with acceptable and neat paperwork.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I produce beautiful art projects, and present school H.W. neatly with good handwriting. ', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You display your external personality in academics with your decent school projects, good handwriting and artwork.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '19');
switch ($a19) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I prefer playground games like jumping ropes, etc. as my outdoor activities.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am a game leader and team captain and excel at every sport. ', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am best in badminton and like non-contact games like running, bicycling, etc.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You should be sociable, self-motivated and directed towards your personal goal.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '20');
switch ($a20) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I require frequent teacher assistance and often touch the person whom I talk.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am self-motivated & loner within the group.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am very sociable, like group activities and motivated by the opinions of my friends.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You need recreation in your daily life through playing individual outdoor games like badminton, running, bicycling taking less time to suffice your study time.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '21');
switch ($a21) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I become impatient, moody and easily frustrated. ', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I feel uncomfortable while displaying emotions.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I express my feelings freely by talking and remain sympathetic to my friends.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Controlling negative emotions like anger, hatred, enmity, etc. is essential for successful social and individual life.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '22');
switch ($a22) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I memorise by actions and movements. ', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I memorise by writing and using mental pictures.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I talk to myself, listen to my inner voice and I memorise jingles, poems and facts well.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'All methods of memorising include concentration, practice, patience, perseverance and revision. So adopt various memory techniques for academic success.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '23');
switch ($a23) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I excel in Science projects but need support in Reading, Maths and doing assignments. ', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I excel in English, Social Studies, Foreign language and Reading. ', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My desk is well-organised; I excel in Art, Maths, Science, Computer & Spellings.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You should excel in all subjects whether in Maths, languages, music, dance, social studies, life skills for holistic success.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '24');
switch ($a24) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My daily life is quite busier to devote time for self-study.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I study till the school homework is completed as my self study.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I devote extra time in self-study after finishing school assignments', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You must make a goal and devote maximum time of study to achieve the same during your formative age of schooling.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '25');
switch ($a25) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I want to excel by improving my grade to at least one step above this year.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My goal is to strengthen my basic weaknesses in Maths and Languages this year.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My goal is achieving ‘A1’ grade in all the subjects this year.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Make your goal realistic, achievable and time bound.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '26');
switch ($a26) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My parents don\'t get regular time to support teaching me personally.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My parents teach me on weekends only', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My parents teach me personally for an average of 1 hour daily', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You should rely on self study and seek various sources like friends, peers, school teachers, parents, neighbours, mentors, etc. where you really need support.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '27');
switch ($a27) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'The school should assign us with framing own questions after the chapter is completed.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'The school should review & revise the last chapter while teaching the present one.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'The class should make groups of like- minded students to discuss the particular chapter.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'The school devotedly plans for the all round development of the students. So, availing the benefit you should understand the opportunities to get success.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '28');
switch ($a28) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I don’t get time to study the chapter in advance.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I study the particular chapter in advance.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I study the taught chapters with reference books and other sources.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You should study the chapters beforehand as first reading in the class, second reading as your homework and the third reading with different sources. Be prepared through frequent revisions and daily tests.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '29');
switch ($a29) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I prepare the subject intensively just before the exam time.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I memorise the answers suggested and checked in the school by writing it down. ', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I make my own notes through flowcharts by different sources and revise frequently.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Revise the chapters withing 48 hours, then weeklym fortnightly and monthly. First revise then proceed for all the subjects.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '30');
switch ($a30) {
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Languages, S.St., Arts are my most favourite subjects.', 0, 1);
        break;
    case 2:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Maths, Science, Computing are my most favourite subjects.', 0, 1);
        break;
    case 3:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'All the subjects are my favourite subjects.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Your least favourite subjects should be given more attention and sufficient time to make it a favourite one.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '31');
switch ($a31) {
    case 'A':
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My present grade in exam is A.', 0, 1);
        break;
    case 'B':
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My present grade in exam is B.', 0, 1);
        break;
    case 'C':
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My present grade in exam is C.', 0, 1);
        break;
    case 'D':
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My present grade in exam is D.', 0, 1);
        break;
    case 'E':
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'My present grade in exam is E.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Always aim to achieve the best grade in the exam through hard and smart study habits.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '32');
switch ($a32) {
    case "Yes":
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am satisfied with my performance in the school result.', 0, 1);
        break;
    case "No":
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am not satisfied with my performance in the school result.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You should be satisfied with your excellent efforts for further success.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '33');
switch ($a33) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never help others.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I sometimes help others.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally help others.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most often, I help others.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always help others.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Help everyone who deserves to get your help and is really in need.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '34');
switch ($a34) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never make new friends very fast.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I make new friends very fast.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally make new friends very fast.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I make new friends very fast.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always make new friends very fast.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Make friends to everyone but always believe in yourself. Don\'t misguide others or be misguided by anyone. Friend in need is a friend indeed.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '35');
switch ($a35) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never love solving puzzles, logical problems.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I love solving puzzles, logical problems.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally love solving puzzles, logical problems.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most often, I love solving puzzles, logical problems.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I love solving puzzles, logical problems always.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Solving puzzles, quizes activate your mind and stimulates the logical reasoning helping to take decisions fast and accurate in your daily life in all situations.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '36');
switch ($a36) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never manage my time well during exams.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I manage my time well during exams.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally manage my time well during exams.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I manage my time well during exams.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always manage my time well during exams.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Find the ratio of score per time for each question sparing 15 minutes for reading questions and revision and stick to it punctually.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '37');
switch ($a37) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never support my parents.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I sometimes support my parents.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally support my parents.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most often, I support my parents.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always support my parents.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Your academic, behavioral and all-round mental development is the greatest support to your parents.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '38');
switch ($a38) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never appear for various competitive exams.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I appear for various competitive exams.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally appear for various competitive exams.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I appear for various competitive exams.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always appear for various competitive exams.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Participate in various competitive exams to measure your excellence, induce competitivity into yourself.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '39');
switch ($a39) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never respect other people.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I respect other people.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally respect other people.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I respect other people.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always respect other people.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Give due respect to everone - even to the youngsters to get back the same.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '40');
switch ($a40) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I love spending time on facebook, whatsapp etc. always.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I, most often, love spending time on facebook, whatsapp etc.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally love spending time on facebook, whatsapp etc.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I, sometimes, love spending time on facebook, whatsapp etc.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never love spending time on facebook, whatsapp etc.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Facebook and Whatsapp are the latest development in the technology which should be utilised strictly to your studies.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '41');
switch ($a41) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am never in the habit of reading books.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I am in the habit of reading books.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am generally in the habit of reading books.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most often, I am in the habit of reading books.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I am always in the habit of reading books.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Always read good moral stories and practice the ideals in your daily living. Don\'t read petty and shabby literature.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '42');
switch ($a42) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I have never had any good writing habits.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I have good writing habits.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally have good writing habits.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I have good writing habits.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always have good writing habits.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Do write your feelings; record and track your daily activity and analyze the same for improving upon the shortcomings, mistakes, etc. if any.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '43');
switch ($a43) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never wake up early in the morning to study.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I, sometimes, wake up early in the morning to study.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally wake up early in the morning to study.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most often, I wake up early in the morning to study.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I wake up early in the morning to study always.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'In case of lack of self-study, adverse environment and situation in daytime is all right, but have sufficient rest daily (7-8 hours).');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '44');
switch ($a44) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Never have I had a good memory power.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I have good memory power.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally have good memory power.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I have good memory power.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always have good memory power.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Try further to write and speak after listening or watching TV news, etc. as good as you can. There is still multiple times more capacity in your brain for memory.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '45');
switch ($a45) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never manage my time to study sufficiently.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I manage my time to study sufficiently.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Generally, I manage my time to study sufficiently.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I, more often, manage my time to study sufficiently.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I manage my time to study sufficiently always.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Manage your time to devote in studies out of the less important works as per your goal.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '46');
switch ($a46) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I spend most of my time with mobile phones always which should be avoided.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'More often, I spend most of my time with mobile phones which should be avoided.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Generally, I spend most of my time with mobile phones which should be avoided.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I spend most of my time with mobile phones which should be avoided.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never spend my time with mobile phones.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Never be addicted to mobile phones or anything which hampers your studies. This is for your own benefit and not undue benefit of others to call you worthlessly.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '47');
switch ($a47) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always talk too much.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I talk too much.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally talk too much.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I talk too much.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never talk too much.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Word has power. Always save your power by talking less and working more.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '48');
switch ($a48) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always waste my time and my day by doing nothing valuable.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I waste my time and my day by doing nothing valuable.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Generally, I waste my time and my day by doing nothing valuable.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I waste my time and my day by doing nothing valuable.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never waste my time and my day by doing nothing valuable.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Time is precious and never comes back once it goes by. Your life is counted by seconds into years. Utilize every second of your time for the achievement of your lifetime.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '49');
switch ($a49) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always tell lies to conceal my shortcomings but I should improve thereon.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I tell lies to conceal my shortcomings but I should improve thereon.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I generally tell lies to conceal my shortcomings but I should improve thereon.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I tell lies to conceal my shortcomings but I should improve thereon.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never tell lies to conceal my shortcomings but I should improve thereon.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'Truth is God. Speak the truth, which is equal to worshipping God. Have confidence in you. Nothing is wrong but concealing the truth from others provokes you to tell a lie. A single lie attracts many lies to justify the same and you are very frightened to think of it being disclosed. Truth is the ultimate winner.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '50');
switch ($a50) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always quarrel with my friends/brothers & sisters which I should avoid.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I quarrel with my friends/brothers & sisters which I should avoid.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Generally, I quarrel with my friends/brothers & sisters which I should avoid.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I quarrel with my friends/brothers & sisters which I should avoid.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never quarrel with my friends/brothers & sisters which I should avoid.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'This is natural in childhood. Now you are growing up to get matured. Be compassionate not to quarrel for trifles and control the situation with wits and humour in such cases.');

$pdf->Cell(1, 5, ' ', 0, 1);
$pdf->Cell(10, 5, '51');
switch ($a51) {
    case 0:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I always cheat my playmates while playing which is unfair.', 0, 1);
        break;
    case 0.25:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Most of the time, I cheat my playmates while playing which is unfair.', 0, 1);
        break;
    case 0.5:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Generally, I cheat my playmates while playing which is unfair.', 0, 1);
        break;
    case 0.75:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'Sometimes, I cheat my playmates while playing which is unfair.', 0, 1);
        break;
    case 1:
        $pdf->Cell(1, 5, ' ');
        $pdf->Cell(0, 5, 'I never cheat my playmates while playing which is unfair.', 0, 1);
        break;
}
$pdf->Cell(15, 5, ' ');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Tips:');
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 5, 'You cheat your friend for winning the play. Even after such victory you fail to win and remain discontented and hate yourself from within. Be bold enough to face your failures, as \'failures are the pillars to success\'. You are born to win ultimately.');

$dir = "reports/";
$filename = $name . $class . $section . $roll_no . ".pdf";

$pdf->Output();
$pdf->Output($dir . $filename, 'F');

//Mailing function
$mail = new PHPMailer();
 
// HTML body
 
$body = "</pre>
<div>";
$body .= " Dear Student,<br>
";
$body .= "&nbsp;&nbsp;&nbsp;Please find the attached report herewith.<br><br>
";
$body .= "Warm Regards,<br>
";
$body .= "<b>EDEXWORLD EMPOWERMENT PVT. LTD. </b> ";
$body .= "</div>" ;
 
// And the absolute required configurations for sending HTML with attachement
 
$mail->AddAddress($email, "My-webpage Website");
$mail->Subject = "Educational survey report";
$mail->MsgHTML($body);
$mail->AddAttachment($dir . $filename);
if(!$mail->Send()) {
echo "There was an error sending the message";
exit;
}
header( "refresh:10;url=complete.php" );

$sql_update = "UPDATE users SET filename='$filename' WHERE id='$user_id'";
$res_update = mysqli_query($conn, $sql_update) or die(mysqli_error($conn));

if (isset($_SESSION["user_id"])) {
    session_destroy();
}
?>