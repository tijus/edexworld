<?php

require("fpdf/fpdf.php");

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

$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 12);
$pdf->AddPage();

$school = isset($_POST['school']) ? $_POST['school'] : '';
$class = isset($_POST['class']) ? $_POST['class'] : '';
$society = isset($_POST['society']) ? $_POST['society'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : '';

/* Variable defining */
$count1_1 = 0;
$count1_2 = 0;
$count1_3 = 0;
$count1_4 = 0;
$count2_1 = 0;
$count2_2 = 0;
$count3_1 = 0;
$count3_2 = 0;
$count4_1 = 0;
$count4_2 = 0;
$count4_3 = 0;
$count4_4 = 0;
$count5_1 = 0;
$count5_2 = 0;
$count6_1 = 0;
$count6_2 = 0;
$count7_1 = 0;
$count7_2 = 0;
$count8_1 = 0;
$count8_2 = 0;
$count9_1 = 0;
$count9_2 = 0;
$count10_1 = 0;
$count10_2 = 0;
$count11_1 = 0;
$count11_2 = 0;
$count12_1 = 0;
$count12_2 = 0;
$count13_1 = 0;
$count13_2 = 0;
$count14_1 = 0;
$count14_2 = 0;
$count15_1 = 0;
$count15_2 = 0;
$count16_1 = 0;
$count16_2 = 0;
$count16_3 = 0;
$count17_1 = 0;
$count17_2 = 0;
$count17_3 = 0;
$count18_1 = 0;
$count18_2 = 0;
$count18_3 = 0;
$count19_1 = 0;
$count19_2 = 0;
$count19_3 = 0;
$count20_1 = 0;
$count20_2 = 0;
$count20_3 = 0;
$count21_1 = 0;
$count21_2 = 0;
$count21_3 = 0;
$count22_1 = 0;
$count22_2 = 0;
$count22_3 = 0;
$count23_1 = 0;
$count23_2 = 0;
$count23_3 = 0;
$count24_1 = 0;
$count24_2 = 0;
$count24_3 = 0;
$count25_1 = 0;
$count25_2 = 0;
$count25_3 = 0;
$count26_1 = 0;
$count26_2 = 0;
$count26_3 = 0;
$count27_1 = 0;
$count27_2 = 0;
$count27_3 = 0;
$count28_1 = 0;
$count28_2 = 0;
$count28_3 = 0;
$count29_1 = 0;
$count29_2 = 0;
$count29_3 = 0;
$count30_1 = 0;
$count30_2 = 0;
$count30_3 = 0;
$count31_1 = 0;
$count31_2 = 0;
$count31_3 = 0;
$count31_4 = 0;
$count31_5 = 0;
$count32_1 = 0;
$count32_2 = 0;
$count33_1 = 0;
$count33_2 = 0;
$count33_3 = 0;
$count33_4 = 0;
$count33_5 = 0;
$count34_1 = 0;
$count34_2 = 0;
$count34_3 = 0;
$count34_4 = 0;
$count34_5 = 0;
$count35_1 = 0;
$count35_2 = 0;
$count35_3 = 0;
$count35_4 = 0;
$count35_5 = 0;
$count36_1 = 0;
$count36_2 = 0;
$count36_3 = 0;
$count36_4 = 0;
$count36_5 = 0;
$count37_1 = 0;
$count37_2 = 0;
$count37_3 = 0;
$count37_4 = 0;
$count37_5 = 0;
$count38_1 = 0;
$count38_2 = 0;
$count38_3 = 0;
$count38_4 = 0;
$count38_5 = 0;
$count39_1 = 0;
$count39_2 = 0;
$count39_3 = 0;
$count39_4 = 0;
$count39_5 = 0;
$count40_1 = 0;
$count40_2 = 0;
$count40_3 = 0;
$count40_4 = 0;
$count40_5 = 0;
$count41_1 = 0;
$count41_2 = 0;
$count41_3 = 0;
$count41_4 = 0;
$count41_5 = 0;
$count42_1 = 0;
$count42_2 = 0;
$count42_3 = 0;
$count42_4 = 0;
$count42_5 = 0;
$count43_1 = 0;
$count43_2 = 0;
$count43_3 = 0;
$count43_4 = 0;
$count43_5 = 0;
$count44_1 = 0;
$count44_2 = 0;
$count44_3 = 0;
$count44_4 = 0;
$count44_5 = 0;
$count45_1 = 0;
$count45_2 = 0;
$count45_3 = 0;
$count45_4 = 0;
$count45_5 = 0;
$count46_1 = 0;
$count46_2 = 0;
$count46_3 = 0;
$count46_4 = 0;
$count46_5 = 0;
$count47_1 = 0;
$count47_2 = 0;
$count47_3 = 0;
$count47_4 = 0;
$count47_5 = 0;
$count48_1 = 0;
$count48_2 = 0;
$count48_3 = 0;
$count48_4 = 0;
$count48_5 = 0;
$count49_1 = 0;
$count49_2 = 0;
$count49_3 = 0;
$count49_4 = 0;
$count49_5 = 0;
$count50_1 = 0;
$count50_2 = 0;
$count50_3 = 0;
$count50_4 = 0;
$count50_5 = 0;
$count51_1 = 0;
$count51_2 = 0;
$count51_3 = 0;
$count51_4 = 0;
$count51_5 = 0;
$count52_1 = 0;
$count52_2 = 0;
$count52_3 = 0;
$count52_4 = 0;
$count52_5 = 0;
$count53_1 = 0;
$count53_2 = 0;
$count53_3 = 0;
$count53_4 = 0;
$count53_5 = 0;

$pdf->Cell(0, 10, 'EDUCATIONAL SURVEY REPORT', 0, 1, 'C');
$pdf->Cell(0, 1, '(Self Awareness, Learning Style and Self-Study)', 0, 1, 'C');
$pdf->Cell(0, 5, '', 0, 1);

if (!empty($school) && !empty($class)) {
    $querysql = "SELECT * FROM answers WHERE class = '$class' AND school = '$school'";
    $queryres = mysqli_query($conn, $querysql) or die(mysqli_error($conn));
    $querynum = mysqli_num_rows($queryres);

    if ($querynum != 0) {
        /* PDF starts */
        $pdf->Cell(95, 5, "School: " . $school , 0, 0, 'L');
        $pdf->Cell(95, 5, "Class: " . $class, 0, 1, 'R');
        $pdf->Cell(0, 5, "(Total number of students: " . $querynum . ")", 0, 1, 'C');
        $pdf->Cell(20, 5, "Sr. No.", 1, 0, 'C');
        $pdf->Cell(130, 5, "Attributes", 1, 0, 'C');
        $pdf->Cell(40, 5, "Percentage (%)", 1, 1, 'C');

        /* Question 1 starts */
        $q1sql = "SELECT q1 FROM answers WHERE class = '$class' AND school = '$school'";
        $q1res = mysqli_query($conn, $q1sql) or die(mysqli_error($conn));
        while ($q1row = mysqli_fetch_assoc($q1res)) {
            if ($q1row['q1'] == 1) {
                $count1_1++;
            } elseif ($q1row['q1'] == 2) {
                $count1_2++;
            } elseif ($q1row['q1'] == 3) {
                $count1_3++;
            } elseif ($q1row['q1'] == 4) {
                $count1_4++;
            }
        }
        $pdf->Cell(20, 6, "1", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Role Model", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "No role model", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Various role models", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Myself as role model", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Parents as role models", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count1_4 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 1 ends */

        /* Question 2 starts */
        $q2sql = "SELECT q2 FROM answers WHERE class = '$class' AND school = '$school'";
        $q2res = mysqli_query($conn, $q2sql) or die(mysqli_error($conn));
        while ($q2row = mysqli_fetch_assoc($q2res)) {
            if ($q2row['q2'] == 1) {
                $count2_1++;
            } elseif ($q2row['q2'] == 2) {
                $count2_2++;
            }
        }
        $pdf->Cell(20, 6, "2", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Respectfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unworthiness", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count2_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Respecting Others", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count2_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 2 ends */

        /* Question 3 starts */
        $q3sql = "SELECT q3 FROM answers WHERE class = '$class' AND school = '$school'";
        $q3res = mysqli_query($conn, $q3sql) or die(mysqli_error($conn));
        while ($q3row = mysqli_fetch_assoc($q3res)) {
            if ($q3row['q3'] == 1) {
                $count3_1++;
            } elseif ($q3row['q3'] == 2) {
                $count3_2++;
            }
        }
        $pdf->Cell(20, 6, "3", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Positiveness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Not sure", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count3_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Proactive", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count3_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 3 ends */

        /* Question 4 starts */
        $q4sql = "SELECT q4 FROM answers WHERE class = '$class' AND school = '$school'";
        $q4res = mysqli_query($conn, $q4sql) or die(mysqli_error($conn));
        while ($q4row = mysqli_fetch_assoc($q4res)) {
            if ($q4row['q4'] == 1) {
                $count4_1++;
            } elseif ($q4row['q4'] == 2) {
                $count4_2++;
            } elseif ($q4row['q4'] == 3) {
                $count4_3++;
            } elseif ($q4row['q4'] == 4) {
                $count4_4++;
            }
        }
        $pdf->Cell(20, 6, "4", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Helpfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Dependability", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unconfident", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Supportability", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Rational Help", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count4_4 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 4 ends */

        /* Question 5 starts */
        $q5sql = "SELECT q5 FROM answers WHERE class = '$class' AND school = '$school'";
        $q5res = mysqli_query($conn, $q5sql) or die(mysqli_error($conn));
        while ($q5row = mysqli_fetch_assoc($q5res)) {
            if ($q5row['q5'] == 1) {
                $count5_1++;
            } elseif ($q5row['q5'] == 2) {
                $count5_2++;
            }
        }
        $pdf->Cell(20, 6, "5", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Nervousness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Badly affected", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count5_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Indifferent", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count5_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 5 ends */

        /* Question 6 starts */
        $q6sql = "SELECT q6 FROM answers WHERE class = '$class' AND school = '$school'";
        $q6res = mysqli_query($conn, $q6sql) or die(mysqli_error($conn));
        while ($q6row = mysqli_fetch_assoc($q6res)) {
            if ($q6row['q6'] == 1) {
                $count6_1++;
            } elseif ($q6row['q6'] == 2) {
                $count6_2++;
            }
        }
        $pdf->Cell(20, 6, "6", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Listening", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Self-confident", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count6_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Rational Listening", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count6_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 6 ends */

        /* Question 7 starts */
        $q7sql = "SELECT q7 FROM answers WHERE class = '$class' AND school = '$school'";
        $q7res = mysqli_query($conn, $q7sql) or die(mysqli_error($conn));
        while ($q7row = mysqli_fetch_assoc($q7res)) {
            if ($q7row['q7'] == 1) {
                $count7_1++;
            } elseif ($q7row['q7'] == 2) {
                $count7_2++;
            }
        }
        $pdf->Cell(20, 6, "7", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Problem Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Incapable", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count7_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Capable", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count7_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 7 ends */

        /* Question 8 starts */
        $q8sql = "SELECT q8 FROM answers WHERE class = '$class' AND school = '$school'";
        $q8res = mysqli_query($conn, $q8sql) or die(mysqli_error($conn));
        while ($q8row = mysqli_fetch_assoc($q8res)) {
            if ($q8row['q8'] == 1) {
                $count8_1++;
            } elseif ($q8row['q8'] == 2) {
                $count8_2++;
            }
        }
        $pdf->Cell(20, 6, "8", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Thinking Skill", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unexpressive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count8_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open and Expressive", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count8_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 8 ends */

        /* Question 9 starts */
        $q9sql = "SELECT q9 FROM answers WHERE class = '$class' AND school = '$school'";
        $q9res = mysqli_query($conn, $q9sql) or die(mysqli_error($conn));
        while ($q9row = mysqli_fetch_assoc($q9res)) {
            if ($q9row['q9'] == 1) {
                $count9_1++;
            } elseif ($q9row['q9'] == 2) {
                $count9_2++;
            }
        }
        $pdf->Cell(20, 6, "9", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Imagination Power", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Ambiguous", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count9_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Explicit and Visionary", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count9_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 9 ends */

        /* Question 10 starts */
        $q10sql = "SELECT q10 FROM answers WHERE class = '$class' AND school = '$school'";
        $q10res = mysqli_query($conn, $q10sql) or die(mysqli_error($conn));
        while ($q10row = mysqli_fetch_assoc($q10res)) {
            if ($q10row['q10'] == 1) {
                $count10_1++;
            } elseif ($q10row['q10'] == 2) {
                $count10_2++;
            }
        }
        $pdf->Cell(20, 6, "10", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Goal Setting", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Uncertain", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count10_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Defined Goal", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count10_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 10 ends */

        /* Question 11 starts */
        $q11sql = "SELECT q11 FROM answers WHERE class = '$class' AND school = '$school'";
        $q11res = mysqli_query($conn, $q11sql) or die(mysqli_error($conn));
        while ($q11row = mysqli_fetch_assoc($q11res)) {
            if ($q11row['q11'] == 1) {
                $count11_1++;
            } elseif ($q11row['q11'] == 2) {
                $count11_2++;
            }
        }
        $pdf->Cell(20, 6, "11", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Decision Making", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Indecisive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count11_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Logical Decision", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count11_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 11 ends */

        /* Question 12 starts */
        $q12sql = "SELECT q12 FROM answers WHERE class = '$class' AND school = '$school'";
        $q12res = mysqli_query($conn, $q12sql) or die(mysqli_error($conn));
        while ($q12row = mysqli_fetch_assoc($q12res)) {
            if ($q12row['q12'] == 1) {
                $count12_1++;
            } elseif ($q12row['q12'] == 2) {
                $count12_2++;
            }
        }
        $pdf->Cell(20, 6, "12", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Problem Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Confused", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count12_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Enthusiastic", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count12_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 12 ends */

        /* Question 13 starts */
        $q13sql = "SELECT q13 FROM answers WHERE class = '$class' AND school = '$school'";
        $q13res = mysqli_query($conn, $q13sql) or die(mysqli_error($conn));
        while ($q13row = mysqli_fetch_assoc($q13res)) {
            if ($q13row['q13'] == 1) {
                $count13_1++;
            } elseif ($q13row['q13'] == 2) {
                $count13_2++;
            }
        }
        $pdf->Cell(20, 6, "13", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Social Communication", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Hesitant", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count13_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open and Free", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count13_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 13 ends */

        /* Question 14 starts */
        $q14sql = "SELECT q14 FROM answers WHERE class = '$class' AND school = '$school'";
        $q14res = mysqli_query($conn, $q14sql) or die(mysqli_error($conn));
        while ($q14row = mysqli_fetch_assoc($q14res)) {
            if ($q14row['q14'] == 1) {
                $count14_1++;
            } elseif ($q14row['q14'] == 2) {
                $count14_2++;
            }
        }
        $pdf->Cell(20, 6, "14", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Academic Interaction", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Scared", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count14_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Cheerful and Friendly", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count14_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 14 ends */

        /* Question 15 starts */
        $q15sql = "SELECT q15 FROM answers WHERE class = '$class' AND school = '$school'";
        $q15res = mysqli_query($conn, $q15sql) or die(mysqli_error($conn));
        while ($q15row = mysqli_fetch_assoc($q15res)) {
            if ($q15row['q15'] == 1) {
                $count15_1++;
            } elseif ($q15row['q15'] == 2) {
                $count15_2++;
            }
        }
        $pdf->Cell(20, 6, "15", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Adaptability", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Disturbed and Distressed", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count15_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Composed and Calm", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count15_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 15 ends */

        /* Question 16 starts */
        $q16sql = "SELECT q16 FROM answers WHERE class = '$class' AND school = '$school'";
        $q16res = mysqli_query($conn, $q16sql) or die(mysqli_error($conn));
        while ($q16row = mysqli_fetch_assoc($q16res)) {
            if ($q16row['q16'] == 1) {
                $count16_1++;
            } elseif ($q16row['q16'] == 2) {
                $count16_2++;
            } elseif ($q16row['q16'] == 3) {
                $count16_3++;
            }
        }
        $pdf->Cell(20, 6, "16", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Being in Class", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Quiet", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count16_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Individual Communication", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count16_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open to all", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count16_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 16 ends */

        /* Question 17 starts */
        $q17sql = "SELECT q17 FROM answers WHERE class = '$class' AND school = '$school'";
        $q17res = mysqli_query($conn, $q17sql) or die(mysqli_error($conn));
        while ($q17row = mysqli_fetch_assoc($q17res)) {
            if ($q17row['q17'] == 1) {
                $count17_1++;
            } elseif ($q17row['q17'] == 2) {
                $count17_2++;
            } elseif ($q17row['q17'] == 3) {
                $count17_3++;
            }
        }
        $pdf->Cell(20, 6, "17", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Hobby and Pastime", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sportive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count17_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Computing and Gadgets", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count17_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Reading Books", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count17_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 17 ends */

        /* Question 18 starts */
        $q18sql = "SELECT q18 FROM answers WHERE class = '$class' AND school = '$school'";
        $q18res = mysqli_query($conn, $q18sql) or die(mysqli_error($conn));
        while ($q18row = mysqli_fetch_assoc($q18res)) {
            if ($q18row['q18'] == 1) {
                $count18_1++;
            } elseif ($q18row['q18'] == 2) {
                $count18_2++;
            } elseif ($q18row['q18'] == 3) {
                $count18_3++;
            }
        }
        $pdf->Cell(20, 6, "18", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Fine Motor Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Casual at Homework", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count18_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Acceptable Paperwork", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count18_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent Homework", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count18_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 18 ends */

        /* Question 19 starts */
        $q19sql = "SELECT q19 FROM answers WHERE class = '$class' AND school = '$school'";
        $q19res = mysqli_query($conn, $q19sql) or die(mysqli_error($conn));
        while ($q19row = mysqli_fetch_assoc($q19res)) {
            if ($q19row['q19'] == 1) {
                $count19_1++;
            } elseif ($q19row['q19'] == 2) {
                $count19_2++;
            } elseif ($q19row['q19'] == 3) {
                $count19_3++;
            }
        }
        $pdf->Cell(20, 6, "19", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Outdoor Activity", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Playground Games", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count19_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excelling in Sports", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count19_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Non-contact Games", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count19_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 19 ends */

        /* Question 20 starts */
        $q20sql = "SELECT q20 FROM answers WHERE class = '$class' AND school = '$school'";
        $q20res = mysqli_query($conn, $q20sql) or die(mysqli_error($conn));
        while ($q20row = mysqli_fetch_assoc($q20res)) {
            if ($q20row['q20'] == 1) {
                $count20_1++;
            } elseif ($q20row['q20'] == 2) {
                $count20_2++;
            } elseif ($q20row['q20'] == 3) {
                $count20_3++;
            }
        }
        $pdf->Cell(20, 6, "20", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Social Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Needs Assistance", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count20_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Self-motivated and Loner", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count20_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Sociable and Friendly", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count20_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 20 ends */

        /* Question 21 starts */
        $q21sql = "SELECT q21 FROM answers WHERE class = '$class' AND school = '$school'";
        $q21res = mysqli_query($conn, $q21sql) or die(mysqli_error($conn));
        while ($q21row = mysqli_fetch_assoc($q21res)) {
            if ($q21row['q21'] == 1) {
                $count21_1++;
            } elseif ($q21row['q21'] == 2) {
                $count21_2++;
            } elseif ($q21row['q21'] == 3) {
                $count21_3++;
            }
        }
        $pdf->Cell(20, 6, "21", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Controlling Emotions", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Aggressive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count21_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Shy and Uncomfortable", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count21_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Sympathetic", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count21_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 21 ends */

        /* Question 22 starts */
        $q22sql = "SELECT q22 FROM answers WHERE class = '$class' AND school = '$school'";
        $q22res = mysqli_query($conn, $q22sql) or die(mysqli_error($conn));
        while ($q22row = mysqli_fetch_assoc($q22res)) {
            if ($q22row['q22'] == 1) {
                $count22_1++;
            } elseif ($q22row['q22'] == 2) {
                $count22_2++;
            } elseif ($q22row['q22'] == 3) {
                $count22_3++;
            }
        }
        $pdf->Cell(20, 6, "22", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Memory Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Action-oriented", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count22_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Writing and mental pictures", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count22_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Listening and self-talking", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count22_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 22 ends */

        /* Question 23 starts */
        $q23sql = "SELECT q23 FROM answers WHERE class = '$class' AND school = '$school'";
        $q23res = mysqli_query($conn, $q23sql) or die(mysqli_error($conn));
        while ($q23row = mysqli_fetch_assoc($q23res)) {
            if ($q23row['q23'] == 1) {
                $count23_1++;
            } elseif ($q23row['q23'] == 2) {
                $count23_2++;
            } elseif ($q23row['q23'] == 3) {
                $count23_3++;
            }
        }
        $pdf->Cell(20, 6, "23", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "At School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excelling only in projects", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count23_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excellent in Languages and Reading", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count23_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent in Science, Maths and Computers", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count23_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 23 ends */

        /* Question 24 starts */
        $q24sql = "SELECT q24 FROM answers WHERE class = '$class' AND school = '$school'";
        $q24res = mysqli_query($conn, $q24sql) or die(mysqli_error($conn));
        while ($q24row = mysqli_fetch_assoc($q24res)) {
            if ($q24row['q24'] == 1) {
                $count24_1++;
            } elseif ($q24row['q24'] == 2) {
                $count24_2++;
            } elseif ($q24row['q24'] == 3) {
                $count24_3++;
            }
        }
        $pdf->Cell(20, 6, "24", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Study Hours", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Hectic life", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count24_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Only homework", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count24_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Comprehensive Study", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count24_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 24 ends */

        /* Question 25 starts */
        $q25sql = "SELECT q25 FROM answers WHERE class = '$class' AND school = '$school'";
        $q25res = mysqli_query($conn, $q25sql) or die(mysqli_error($conn));
        while ($q25row = mysqli_fetch_assoc($q25res)) {
            if ($q25row['q25'] == 1) {
                $count25_1++;
            } elseif ($q25row['q25'] == 2) {
                $count25_2++;
            } elseif ($q25row['q25'] == 3) {
                $count25_3++;
            }
        }
        $pdf->Cell(20, 6, "25", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Goal Setting", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "One Grade Above", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count25_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Basic Improvement", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count25_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Top Scoring", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count25_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 25 ends */

        /* Question 26 starts */
        $q26sql = "SELECT q26 FROM answers WHERE class = '$class' AND school = '$school'";
        $q26res = mysqli_query($conn, $q26sql) or die(mysqli_error($conn));
        while ($q26row = mysqli_fetch_assoc($q26res)) {
            if ($q26row['q26'] == 1) {
                $count26_1++;
            } elseif ($q26row['q26'] == 2) {
                $count26_2++;
            } elseif ($q26row['q26'] == 3) {
                $count26_3++;
            }
        }
        $pdf->Cell(20, 6, "26", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Parental Support", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count26_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "On Weekends and Holidays", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count26_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Regular", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count26_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 26 ends */

        /* Question 27 starts */
        $q27sql = "SELECT q27 FROM answers WHERE class = '$class' AND school = '$school'";
        $q27res = mysqli_query($conn, $q27sql) or die(mysqli_error($conn));
        while ($q27row = mysqli_fetch_assoc($q27res)) {
            if ($q27row['q27'] == 1) {
                $count27_1++;
            } elseif ($q27row['q27'] == 2) {
                $count27_2++;
            } elseif ($q27row['q27'] == 3) {
                $count27_3++;
            }
        }
        $pdf->Cell(20, 6, "27", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Expectation from School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Assignment for framing questions", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count27_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Applying Frequent Revision Techniques", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count27_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Workshop Method with like-minded group", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count27_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 27 ends */
        
        $pdf->Cell(0, 10, '', 0, 1);
        
        /* Question 28 starts */
        $q28sql = "SELECT q28 FROM answers WHERE class = '$class' AND school = '$school'";
        $q28res = mysqli_query($conn, $q28sql) or die(mysqli_error($conn));
        while ($q28row = mysqli_fetch_assoc($q28res)) {
            if ($q28row['q28'] == 1) {
                $count28_1++;
            } elseif ($q28row['q28'] == 2) {
                $count28_2++;
            } elseif ($q28row['q28'] == 3) {
                $count28_3++;
            }
        }
        $pdf->Cell(20, 6, "28", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Preparedness for study", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "No time", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count28_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Advance Study", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count28_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Intensive and Referential Study", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count28_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 28 ends */

        /* Question 29 starts */
        $q29sql = "SELECT q29 FROM answers WHERE class = '$class' AND school = '$school'";
        $q29res = mysqli_query($conn, $q29sql) or die(mysqli_error($conn));
        while ($q29row = mysqli_fetch_assoc($q29res)) {
            if ($q29row['q29'] == 1) {
                $count29_1++;
            } elseif ($q29row['q29'] == 2) {
                $count29_2++;
            } elseif ($q29row['q29'] == 3) {
                $count29_3++;
            }
        }
        $pdf->Cell(20, 6, "29", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Revision of Chapters", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A few days before exam", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count29_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Dependent on School notes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count29_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Own notes preparation", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count29_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 29 ends */

        /* Question 30 starts */
        $q30sql = "SELECT q30 FROM answers WHERE class = '$class' AND school = '$school'";
        $q30res = mysqli_query($conn, $q30sql) or die(mysqli_error($conn));
        while ($q30row = mysqli_fetch_assoc($q30res)) {
            if ($q30row['q30'] == 1) {
                $count30_1++;
            } elseif ($q30row['q30'] == 2) {
                $count30_2++;
            } elseif ($q30row['q30'] == 3) {
                $count30_3++;
            }
        }
        $pdf->Cell(20, 6, "30", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Favourite Subjects", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Languages, S.St., Arts", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count30_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Maths, Science, Computing", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count30_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "All the subjects", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count30_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 30 ends */

        /* Question 31 starts */
        $q31sql = "SELECT q31 FROM answers WHERE class = '$class' AND school = '$school'";
        $q31res = mysqli_query($conn, $q31sql) or die(mysqli_error($conn));
        while ($q31row = mysqli_fetch_assoc($q31res)) {
            if ($q31row['q31'] == 'A') {
                $count31_1++;
            } elseif ($q31row['q31'] == 'B') {
                $count31_2++;
            } elseif ($q31row['q31'] == 'C') {
                $count31_3++;
            } elseif ($q31row['q31'] == 'D') {
                $count31_4++;
            } elseif ($q31row['q31'] == 'E') {
                $count31_5++;
            }
        }
        $pdf->Cell(20, 6, "31", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Grade in Exams", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "B", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "C", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "D", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "E", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count31_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 31 ends */

        /* Question 32 starts */
        $q32sql = "SELECT q32 FROM answers WHERE class = '$class' AND school = '$school'";
        $q32res = mysqli_query($conn, $q32sql) or die(mysqli_error($conn));
        while ($q32row = mysqli_fetch_assoc($q32res)) {
            if ($q32row['q32'] == 'Yes') {
                $count32_1++;
            } elseif ($q32row['q32'] == 'No') {
                $count32_2++;
            }
        }
        $pdf->Cell(20, 6, "32", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Performance in School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Satisfied", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count32_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Not satisfied", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count32_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 32 ends */

        /* Question 33 starts */
        $q33sql = "SELECT q33 FROM answers WHERE class = '$class' AND school = '$school'";
        $q33res = mysqli_query($conn, $q33sql) or die(mysqli_error($conn));
        while ($q33row = mysqli_fetch_assoc($q33res)) {
            if ($q33row['q33'] == 0) {
                $count33_1++;
            } elseif ($q33row['q33'] == 0.25) {
                $count33_2++;
            } elseif ($q33row['q33'] == 0.5) {
                $count33_3++;
            } elseif ($q33row['q33'] == 0.75) {
                $count33_4++;
            } elseif ($q33row['q33'] == 1) {
                $count33_5++;
            }
        }
        $pdf->Cell(20, 6, "33", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Helpfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count33_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 33 ends */

        /* Question 34 starts */
        $q34sql = "SELECT q34 FROM answers WHERE class = '$class' AND school = '$school'";
        $q34res = mysqli_query($conn, $q34sql) or die(mysqli_error($conn));
        while ($q34row = mysqli_fetch_assoc($q34res)) {
            if ($q34row['q34'] == 0) {
                $count34_1++;
            } elseif ($q34row['q34'] == 0.25) {
                $count34_2++;
            } elseif ($q34row['q34'] == 0.5) {
                $count34_3++;
            } elseif ($q34row['q34'] == 0.75) {
                $count34_4++;
            } elseif ($q34row['q34'] == 1) {
                $count34_5++;
            }
        }
        $pdf->Cell(20, 6, "34", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Friendliness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count34_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 34 ends */

        /* Question 35 starts */
        $q35sql = "SELECT q35 FROM answers WHERE class = '$class' AND school = '$school'";
        $q35res = mysqli_query($conn, $q35sql) or die(mysqli_error($conn));
        while ($q35row = mysqli_fetch_assoc($q35res)) {
            if ($q35row['q35'] == 0) {
                $count35_1++;
            } elseif ($q35row['q35'] == 0.25) {
                $count35_2++;
            } elseif ($q35row['q35'] == 0.5) {
                $count35_3++;
            } elseif ($q35row['q35'] == 0.75) {
                $count35_4++;
            } elseif ($q35row['q35'] == 1) {
                $count35_5++;
            }
        }
        $pdf->Cell(20, 6, "35", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Puzzle Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count35_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 35 ends */

        /* Question 36 starts */
        $q36sql = "SELECT q36 FROM answers WHERE class = '$class' AND school = '$school'";
        $q36res = mysqli_query($conn, $q36sql) or die(mysqli_error($conn));
        while ($q36row = mysqli_fetch_assoc($q36res)) {
            if ($q36row['q36'] == 0) {
                $count36_1++;
            } elseif ($q36row['q36'] == 0.25) {
                $count36_2++;
            } elseif ($q36row['q36'] == 0.5) {
                $count36_3++;
            } elseif ($q36row['q36'] == 0.75) {
                $count36_4++;
            } elseif ($q36row['q36'] == 1) {
                $count36_5++;
            }
        }
        $pdf->Cell(20, 6, "36", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Time Management during exams", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count36_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 36 ends */

        /* Question 37 starts */
        $q37sql = "SELECT q37 FROM answers WHERE class = '$class' AND school = '$school'";
        $q37res = mysqli_query($conn, $q37sql) or die(mysqli_error($conn));
        while ($q37row = mysqli_fetch_assoc($q37res)) {
            if ($q37row['q37'] == 0) {
                $count37_1++;
            } elseif ($q37row['q37'] == 0.25) {
                $count37_2++;
            } elseif ($q37row['q37'] == 0.5) {
                $count37_3++;
            } elseif ($q37row['q37'] == 0.75) {
                $count37_4++;
            } elseif ($q37row['q37'] == 1) {
                $count37_5++;
            }
        }
        $pdf->Cell(20, 6, "37", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Supporting Parents", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count37_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 37 ends */
        
        $pdf->Cell(0, 10, '', 0, 1);

        /* Question 38 starts */
        $q38sql = "SELECT q38 FROM answers WHERE class = '$class' AND school = '$school'";
        $q38res = mysqli_query($conn, $q38sql) or die(mysqli_error($conn));
        while ($q38row = mysqli_fetch_assoc($q38res)) {
            if ($q38row['q38'] == 0) {
                $count38_1++;
            } elseif ($q38row['q38'] == 0.25) {
                $count38_2++;
            } elseif ($q38row['q38'] == 0.5) {
                $count38_3++;
            } elseif ($q38row['q38'] == 0.75) {
                $count38_4++;
            } elseif ($q38row['q38'] == 1) {
                $count38_5++;
            }
        }
        $pdf->Cell(20, 6, "38", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Competitivity", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count38_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 38 ends */

        /* Question 39 starts */
        $q39sql = "SELECT q39 FROM answers WHERE class = '$class' AND school = '$school'";
        $q39res = mysqli_query($conn, $q39sql) or die(mysqli_error($conn));
        while ($q39row = mysqli_fetch_assoc($q39res)) {
            if ($q39row['q39'] == 0) {
                $count39_1++;
            } elseif ($q39row['q39'] == 0.25) {
                $count39_2++;
            } elseif ($q39row['q39'] == 0.5) {
                $count39_3++;
            } elseif ($q39row['q39'] == 0.75) {
                $count39_4++;
            } elseif ($q39row['q39'] == 1) {
                $count39_5++;
            }
        }
        $pdf->Cell(20, 6, "39", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Respectfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count39_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 39 ends */

        /* Question 40 starts */
        $q40sql = "SELECT q40 FROM answers WHERE class = '$class' AND school = '$school'";
        $q40res = mysqli_query($conn, $q40sql) or die(mysqli_error($conn));
        while ($q40row = mysqli_fetch_assoc($q40res)) {
            if ($q40row['q40'] == 1) {
                $count40_1++;
            } elseif ($q40row['q40'] == 0.75) {
                $count40_2++;
            } elseif ($q40row['q40'] == 0.5) {
                $count40_3++;
            } elseif ($q40row['q40'] == 0.25) {
                $count40_4++;
            } elseif ($q40row['q40'] == 0) {
                $count40_5++;
            }
        }
        $pdf->Cell(20, 6, "40", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Facebook, Whatsapp", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count40_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 40 ends */

        /* Question 41 starts */
        $q41sql = "SELECT q41 FROM answers WHERE class = '$class' AND school = '$school'";
        $q41res = mysqli_query($conn, $q41sql) or die(mysqli_error($conn));
        while ($q41row = mysqli_fetch_assoc($q41res)) {
            if ($q41row['q41'] == 0) {
                $count41_1++;
            } elseif ($q41row['q41'] == 0.25) {
                $count41_2++;
            } elseif ($q41row['q41'] == 0.5) {
                $count41_3++;
            } elseif ($q41row['q41'] == 0.75) {
                $count41_4++;
            } elseif ($q41row['q41'] == 1) {
                $count41_5++;
            }
        }
        $pdf->Cell(20, 6, "41", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Reading Books", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count41_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 41 ends */

        /* Question 42 starts */
        $q42sql = "SELECT q42 FROM answers WHERE class = '$class' AND school = '$school'";
        $q42res = mysqli_query($conn, $q42sql) or die(mysqli_error($conn));
        while ($q42row = mysqli_fetch_assoc($q42res)) {
            if ($q42row['q42'] == 0) {
                $count42_1++;
            } elseif ($q42row['q42'] == 0.25) {
                $count42_2++;
            } elseif ($q42row['q42'] == 0.5) {
                $count42_3++;
            } elseif ($q42row['q42'] == 0.75) {
                $count42_4++;
            } elseif ($q42row['q42'] == 1) {
                $count42_5++;
            }
        }
        $pdf->Cell(20, 6, "42", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Writing Habits", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count42_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 42 ends */

        /* Question 43 starts */
        $q43sql = "SELECT q43 FROM answers WHERE class = '$class' AND school = '$school'";
        $q43res = mysqli_query($conn, $q43sql) or die(mysqli_error($conn));
        while ($q43row = mysqli_fetch_assoc($q43res)) {
            if ($q43row['q43'] == 0) {
                $count43_1++;
            } elseif ($q43row['q43'] == 0.25) {
                $count43_2++;
            } elseif ($q43row['q43'] == 0.5) {
                $count43_3++;
            } elseif ($q43row['q43'] == 0.75) {
                $count43_4++;
            } elseif ($q43row['q43'] == 1) {
                $count43_5++;
            }
        }
        $pdf->Cell(20, 6, "43", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Early Rising", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count43_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 43 ends */

        /* Question 44 starts */
        $q44sql = "SELECT q44 FROM answers WHERE class = '$class' AND school = '$school'";
        $q44res = mysqli_query($conn, $q44sql) or die(mysqli_error($conn));
        while ($q44row = mysqli_fetch_assoc($q44res)) {
            if ($q44row['q44'] == 0) {
                $count44_1++;
            } elseif ($q44row['q44'] == 0.25) {
                $count44_2++;
            } elseif ($q44row['q44'] == 0.5) {
                $count44_3++;
            } elseif ($q44row['q44'] == 0.75) {
                $count44_4++;
            } elseif ($q44row['q44'] == 1) {
                $count44_5++;
            }
        }
        $pdf->Cell(20, 6, "44", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Memory Power", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count44_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 44 ends */

        /* Question 45 starts */
        $q45sql = "SELECT q45 FROM answers WHERE class = '$class' AND school = '$school'";
        $q45res = mysqli_query($conn, $q45sql) or die(mysqli_error($conn));
        while ($q45row = mysqli_fetch_assoc($q45res)) {
            if ($q45row['q45'] == 0) {
                $count45_1++;
            } elseif ($q45row['q45'] == 0.25) {
                $count45_2++;
            } elseif ($q45row['q45'] == 0.5) {
                $count45_3++;
            } elseif ($q45row['q45'] == 0.75) {
                $count45_4++;
            } elseif ($q45row['q45'] == 1) {
                $count45_5++;
            }
        }
        $pdf->Cell(20, 6, "45", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Managing daily Self Study", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count45_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 45 ends */
        
        $pdf->Cell(0, 21, '', 0, 1);

        /* Question 46 starts */
        $q46sql = "SELECT q46 FROM answers WHERE class = '$class' AND school = '$school'";
        $q46res = mysqli_query($conn, $q46sql) or die(mysqli_error($conn));
        while ($q46row = mysqli_fetch_assoc($q46res)) {
            if ($q46row['q46'] == 1) {
                $count46_1++;
            } elseif ($q46row['q46'] == 0.75) {
                $count46_2++;
            } elseif ($q46row['q46'] == 0.5) {
                $count46_3++;
            } elseif ($q46row['q46'] == 0.25) {
                $count46_4++;
            } elseif ($q46row['q46'] == 0) {
                $count46_5++;
            }
        }
        $pdf->Cell(20, 6, "46", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Cellular Phone addiction", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count46_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 46 ends */

        /* Question 47 starts */
        $q47sql = "SELECT q47 FROM answers WHERE class = '$class' AND school = '$school'";
        $q47res = mysqli_query($conn, $q47sql) or die(mysqli_error($conn));
        while ($q47row = mysqli_fetch_assoc($q47res)) {
            if ($q47row['q47'] == 1) {
                $count47_1++;
            } elseif ($q47row['q47'] == 0.75) {
                $count47_2++;
            } elseif ($q47row['q47'] == 0.5) {
                $count47_3++;
            } elseif ($q47row['q47'] == 0.25) {
                $count47_4++;
            } elseif ($q47row['q47'] == 0) {
                $count47_5++;
            }
        }
        $pdf->Cell(20, 6, "47", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Talkativeness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count47_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 47 ends */

        /* Question 48 starts */
        $q48sql = "SELECT q48 FROM answers WHERE class = '$class' AND school = '$school'";
        $q48res = mysqli_query($conn, $q48sql) or die(mysqli_error($conn));
        while ($q48row = mysqli_fetch_assoc($q48res)) {
            if ($q48row['q48'] == 1) {
                $count48_1++;
            } elseif ($q48row['q48'] == 0.75) {
                $count48_2++;
            } elseif ($q48row['q48'] == 0.5) {
                $count48_3++;
            } elseif ($q48row['q48'] == 0.25) {
                $count48_4++;
            } elseif ($q48row['q48'] == 0) {
                $count48_5++;
            }
        }
        $pdf->Cell(20, 6, "48", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Wasting Time", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count48_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 48 ends */

        /* Question 49 starts */
        $q49sql = "SELECT q49 FROM answers WHERE class = '$class' AND school = '$school'";
        $q49res = mysqli_query($conn, $q49sql) or die(mysqli_error($conn));
        while ($q49row = mysqli_fetch_assoc($q49res)) {
            if ($q49row['q49'] == 1) {
                $count49_1++;
            } elseif ($q49row['q49'] == 0.75) {
                $count49_2++;
            } elseif ($q49row['q49'] == 0.5) {
                $count49_3++;
            } elseif ($q49row['q49'] == 0.25) {
                $count49_4++;
            } elseif ($q49row['q49'] == 0) {
                $count49_5++;
            }
        }
        $pdf->Cell(20, 6, "49", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Telling Lies", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count49_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 49 ends */

        /* Question 50 starts */
        $q50sql = "SELECT q50 FROM answers WHERE class = '$class' AND school = '$school'";
        $q50res = mysqli_query($conn, $q50sql) or die(mysqli_error($conn));
        while ($q50row = mysqli_fetch_assoc($q50res)) {
            if ($q50row['q50'] == 1) {
                $count50_1++;
            } elseif ($q50row['q50'] == 0.75) {
                $count50_2++;
            } elseif ($q50row['q50'] == 0.5) {
                $count50_3++;
            } elseif ($q50row['q50'] == 0.25) {
                $count50_4++;
            } elseif ($q50row['q50'] == 0) {
                $count50_5++;
            }
        }
        $pdf->Cell(20, 6, "50", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Quarrelling", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count50_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 50 ends */

        /* Question 51 starts */
        $q51sql = "SELECT q51 FROM answers WHERE class = '$class' AND school = '$school'";
        $q51res = mysqli_query($conn, $q51sql) or die(mysqli_error($conn));
        while ($q51row = mysqli_fetch_assoc($q51res)) {
            if ($q51row['q51'] == 1) {
                $count51_1++;
            } elseif ($q51row['q51'] == 0.75) {
                $count51_2++;
            } elseif ($q51row['q51'] == 0.5) {
                $count51_3++;
            } elseif ($q51row['q51'] == 0.25) {
                $count51_4++;
            } elseif ($q51row['q51'] == 0) {
                $count51_5++;
            }
        }
        $pdf->Cell(20, 6, "51", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Deceiving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count51_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 51 ends */

        /* Question 52 starts */
        $q52sql = "SELECT q52 FROM answers WHERE class = '$class' AND school = '$school'";
        $q52res = mysqli_query($conn, $q52sql) or die(mysqli_error($conn));
        while ($q52row = mysqli_fetch_assoc($q52res)) {
            if ($q52row['q52'] == 0) {
                $count52_1++;
            } elseif ($q52row['q52'] == 0.25) {
                $count52_2++;
            } elseif ($q52row['q52'] == 0.5) {
                $count52_3++;
            } elseif ($q52row['q52'] == 0.75) {
                $count52_4++;
            } elseif ($q52row['q52'] == 1) {
                $count52_5++;
            }
        }
        $pdf->Cell(20, 6, "52", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Survey Feedback", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Boring & Lengthy", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Fair", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Good", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Very Good", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count52_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 52 ends */

        /* Question 53 starts */
        $q53sql = "SELECT sum FROM answers WHERE class = '$class' AND school = '$school'";
        $q53res = mysqli_query($conn, $q53sql) or die(mysqli_error($conn));
        while ($q53row = mysqli_fetch_assoc($q53res)) {
            if ($q53row['sum'] >= 81) {
                $count53_1++;
            } elseif ($q53row['sum'] >= 61 && $q53row['sum'] < 81) {
                $count53_2++;
            } elseif ($q53row['sum'] >= 41 && $q53row['sum'] < 61) {
                $count53_3++;
            } elseif ($q53row['sum'] >= 33 && $q53row['sum'] < 41) {
                $count53_4++;
            } elseif ($q53row['sum'] >= 00 && $q53row['sum'] < 33) {
                $count53_5++;
            }
        }
        $pdf->Cell(20, 6, "53", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Grade in the Survey", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A(81-100)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "B(61-80)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "C(41-60)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "D(33-40)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "E(00-32)", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count53_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 53 ends */
    } else {
        $pdf->Cell(0, 5, "There are no records.", 0, 0, 'C');
    }
}


elseif(!empty($area) && !empty($society)){
    $querysql = "SELECT * FROM answers WHERE area = '$area' AND society = '$society'";
    $queryres = mysqli_query($conn, $querysql) or die(mysqli_error($conn));
    $querynum = mysqli_num_rows($queryres);

    if ($querynum != 0) {
        /* PDF starts */
        $pdf->Cell(95, 5, "Society: " . $society , 0, 0, 'L');
        $pdf->Cell(95, 5, "Area: " . $area, 0, 1, 'R');
        $pdf->Cell(0, 5, "(Total number of students: " . $querynum . ")", 0, 1, 'C');
        $pdf->Cell(20, 5, "Sr. No.", 1, 0, 'C');
        $pdf->Cell(130, 5, "Attributes", 1, 0, 'C');
        $pdf->Cell(40, 5, "Percentage (%)", 1, 1, 'C');

        /* Question 1 starts */
        $q1sql = "SELECT q1 FROM answers WHERE area = '$area' AND society = '$society'";
        $q1res = mysqli_query($conn, $q1sql) or die(mysqli_error($conn));
        while ($q1row = mysqli_fetch_assoc($q1res)) {
            if ($q1row['q1'] == 1) {
                $count1_1++;
            } elseif ($q1row['q1'] == 2) {
                $count1_2++;
            } elseif ($q1row['q1'] == 3) {
                $count1_3++;
            } elseif ($q1row['q1'] == 4) {
                $count1_4++;
            }
        }
        $pdf->Cell(20, 6, "1", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Role Model", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "No role model", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Various role models", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Myself as role model", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count1_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Parents as role models", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count1_4 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 1 ends */

        /* Question 2 starts */
        $q2sql = "SELECT q2 FROM answers WHERE area = '$area' AND society = '$society'";
        $q2res = mysqli_query($conn, $q2sql) or die(mysqli_error($conn));
        while ($q2row = mysqli_fetch_assoc($q2res)) {
            if ($q2row['q2'] == 1) {
                $count2_1++;
            } elseif ($q2row['q2'] == 2) {
                $count2_2++;
            }
        }
        $pdf->Cell(20, 6, "2", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Respectfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unworthiness", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count2_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Respecting Others", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count2_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 2 ends */

        /* Question 3 starts */
        $q3sql = "SELECT q3 FROM answers WHERE area = '$area' AND society = '$society'";
        $q3res = mysqli_query($conn, $q3sql) or die(mysqli_error($conn));
        while ($q3row = mysqli_fetch_assoc($q3res)) {
            if ($q3row['q3'] == 1) {
                $count3_1++;
            } elseif ($q3row['q3'] == 2) {
                $count3_2++;
            }
        }
        $pdf->Cell(20, 6, "3", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Positiveness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Not sure", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count3_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Proactive", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count3_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 3 ends */

        /* Question 4 starts */
        $q4sql = "SELECT q4 FROM answers WHERE area = '$area' AND society = '$society'";
        $q4res = mysqli_query($conn, $q4sql) or die(mysqli_error($conn));
        while ($q4row = mysqli_fetch_assoc($q4res)) {
            if ($q4row['q4'] == 1) {
                $count4_1++;
            } elseif ($q4row['q4'] == 2) {
                $count4_2++;
            } elseif ($q4row['q4'] == 3) {
                $count4_3++;
            } elseif ($q4row['q4'] == 4) {
                $count4_4++;
            }
        }
        $pdf->Cell(20, 6, "4", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Helpfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Dependability", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unconfident", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Supportability", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count4_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Rational Help", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count4_4 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 4 ends */

        /* Question 5 starts */
        $q5sql = "SELECT q5 FROM answers WHERE area = '$area' AND society = '$society'";
        $q5res = mysqli_query($conn, $q5sql) or die(mysqli_error($conn));
        while ($q5row = mysqli_fetch_assoc($q5res)) {
            if ($q5row['q5'] == 1) {
                $count5_1++;
            } elseif ($q5row['q5'] == 2) {
                $count5_2++;
            }
        }
        $pdf->Cell(20, 6, "5", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Nervousness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Badly affected", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count5_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Indifferent", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count5_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 5 ends */

        /* Question 6 starts */
        $q6sql = "SELECT q6 FROM answers WHERE area = '$area' AND society = '$society'";
        $q6res = mysqli_query($conn, $q6sql) or die(mysqli_error($conn));
        while ($q6row = mysqli_fetch_assoc($q6res)) {
            if ($q6row['q6'] == 1) {
                $count6_1++;
            } elseif ($q6row['q6'] == 2) {
                $count6_2++;
            }
        }
        $pdf->Cell(20, 6, "6", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Listening", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Self-confident", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count6_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Rational Listening", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count6_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 6 ends */

        /* Question 7 starts */
        $q7sql = "SELECT q7 FROM answers WHERE area = '$area' AND society = '$society'";
        $q7res = mysqli_query($conn, $q7sql) or die(mysqli_error($conn));
        while ($q7row = mysqli_fetch_assoc($q7res)) {
            if ($q7row['q7'] == 1) {
                $count7_1++;
            } elseif ($q7row['q7'] == 2) {
                $count7_2++;
            }
        }
        $pdf->Cell(20, 6, "7", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Problem Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Incapable", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count7_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Capable", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count7_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 7 ends */

        /* Question 8 starts */
        $q8sql = "SELECT q8 FROM answers WHERE area = '$area' AND society = '$society'";
        $q8res = mysqli_query($conn, $q8sql) or die(mysqli_error($conn));
        while ($q8row = mysqli_fetch_assoc($q8res)) {
            if ($q8row['q8'] == 1) {
                $count8_1++;
            } elseif ($q8row['q8'] == 2) {
                $count8_2++;
            }
        }
        $pdf->Cell(20, 6, "8", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Thinking Skill", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Unexpressive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count8_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open and Expressive", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count8_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 8 ends */

        /* Question 9 starts */
        $q9sql = "SELECT q9 FROM answers WHERE area = '$area' AND society = '$society'";
        $q9res = mysqli_query($conn, $q9sql) or die(mysqli_error($conn));
        while ($q9row = mysqli_fetch_assoc($q9res)) {
            if ($q9row['q9'] == 1) {
                $count9_1++;
            } elseif ($q9row['q9'] == 2) {
                $count9_2++;
            }
        }
        $pdf->Cell(20, 6, "9", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Imagination Power", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Ambiguous", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count9_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Explicit and Visionary", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count9_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 9 ends */

        /* Question 10 starts */
        $q10sql = "SELECT q10 FROM answers WHERE area = '$area' AND society = '$society'";
        $q10res = mysqli_query($conn, $q10sql) or die(mysqli_error($conn));
        while ($q10row = mysqli_fetch_assoc($q10res)) {
            if ($q10row['q10'] == 1) {
                $count10_1++;
            } elseif ($q10row['q10'] == 2) {
                $count10_2++;
            }
        }
        $pdf->Cell(20, 6, "10", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Goal Setting", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Uncertain", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count10_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Defined Goal", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count10_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 10 ends */

        /* Question 11 starts */
        $q11sql = "SELECT q11 FROM answers WHERE area = '$area' AND society = '$society'";
        $q11res = mysqli_query($conn, $q11sql) or die(mysqli_error($conn));
        while ($q11row = mysqli_fetch_assoc($q11res)) {
            if ($q11row['q11'] == 1) {
                $count11_1++;
            } elseif ($q11row['q11'] == 2) {
                $count11_2++;
            }
        }
        $pdf->Cell(20, 6, "11", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Decision Making", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Indecisive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count11_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Logical Decision", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count11_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 11 ends */

        /* Question 12 starts */
        $q12sql = "SELECT q12 FROM answers WHERE area = '$area' AND society = '$society'";
        $q12res = mysqli_query($conn, $q12sql) or die(mysqli_error($conn));
        while ($q12row = mysqli_fetch_assoc($q12res)) {
            if ($q12row['q12'] == 1) {
                $count12_1++;
            } elseif ($q12row['q12'] == 2) {
                $count12_2++;
            }
        }
        $pdf->Cell(20, 6, "12", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Problem Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Confused", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count12_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Enthusiastic", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count12_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 12 ends */

        /* Question 13 starts */
        $q13sql = "SELECT q13 FROM answers WHERE area = '$area' AND society = '$society'";
        $q13res = mysqli_query($conn, $q13sql) or die(mysqli_error($conn));
        while ($q13row = mysqli_fetch_assoc($q13res)) {
            if ($q13row['q13'] == 1) {
                $count13_1++;
            } elseif ($q13row['q13'] == 2) {
                $count13_2++;
            }
        }
        $pdf->Cell(20, 6, "13", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Social Communication", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Hesitant", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count13_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open and Free", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count13_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 13 ends */

        /* Question 14 starts */
        $q14sql = "SELECT q14 FROM answers WHERE area = '$area' AND society = '$society'";
        $q14res = mysqli_query($conn, $q14sql) or die(mysqli_error($conn));
        while ($q14row = mysqli_fetch_assoc($q14res)) {
            if ($q14row['q14'] == 1) {
                $count14_1++;
            } elseif ($q14row['q14'] == 2) {
                $count14_2++;
            }
        }
        $pdf->Cell(20, 6, "14", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Academic Interaction", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Scared", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count14_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Cheerful and Friendly", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count14_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 14 ends */

        /* Question 15 starts */
        $q15sql = "SELECT q15 FROM answers WHERE area = '$area' AND society = '$society'";
        $q15res = mysqli_query($conn, $q15sql) or die(mysqli_error($conn));
        while ($q15row = mysqli_fetch_assoc($q15res)) {
            if ($q15row['q15'] == 1) {
                $count15_1++;
            } elseif ($q15row['q15'] == 2) {
                $count15_2++;
            }
        }
        $pdf->Cell(20, 6, "15", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Adaptability", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Disturbed and Distressed", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count15_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Composed and Calm", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count15_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 15 ends */

        /* Question 16 starts */
        $q16sql = "SELECT q16 FROM answers WHERE area = '$area' AND society = '$society'";
        $q16res = mysqli_query($conn, $q16sql) or die(mysqli_error($conn));
        while ($q16row = mysqli_fetch_assoc($q16res)) {
            if ($q16row['q16'] == 1) {
                $count16_1++;
            } elseif ($q16row['q16'] == 2) {
                $count16_2++;
            } elseif ($q16row['q16'] == 3) {
                $count16_3++;
            }
        }
        $pdf->Cell(20, 6, "16", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Being in Class", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Quiet", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count16_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Individual Communication", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count16_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Open to all", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count16_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 16 ends */

        /* Question 17 starts */
        $q17sql = "SELECT q17 FROM answers WHERE area = '$area' AND society = '$society'";
        $q17res = mysqli_query($conn, $q17sql) or die(mysqli_error($conn));
        while ($q17row = mysqli_fetch_assoc($q17res)) {
            if ($q17row['q17'] == 1) {
                $count17_1++;
            } elseif ($q17row['q17'] == 2) {
                $count17_2++;
            } elseif ($q17row['q17'] == 3) {
                $count17_3++;
            }
        }
        $pdf->Cell(20, 6, "17", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Hobby and Pastime", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sportive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count17_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Computing and Gadgets", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count17_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Reading Books", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count17_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 17 ends */

        /* Question 18 starts */
        $q18sql = "SELECT q18 FROM answers WHERE area = '$area' AND society = '$society'";
        $q18res = mysqli_query($conn, $q18sql) or die(mysqli_error($conn));
        while ($q18row = mysqli_fetch_assoc($q18res)) {
            if ($q18row['q18'] == 1) {
                $count18_1++;
            } elseif ($q18row['q18'] == 2) {
                $count18_2++;
            } elseif ($q18row['q18'] == 3) {
                $count18_3++;
            }
        }
        $pdf->Cell(20, 6, "18", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Fine Motor Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Casual at Homework", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count18_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Acceptable Paperwork", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count18_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent Homework", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count18_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 18 ends */

        /* Question 19 starts */
        $q19sql = "SELECT q19 FROM answers WHERE area = '$area' AND society = '$society'";
        $q19res = mysqli_query($conn, $q19sql) or die(mysqli_error($conn));
        while ($q19row = mysqli_fetch_assoc($q19res)) {
            if ($q19row['q19'] == 1) {
                $count19_1++;
            } elseif ($q19row['q19'] == 2) {
                $count19_2++;
            } elseif ($q19row['q19'] == 3) {
                $count19_3++;
            }
        }
        $pdf->Cell(20, 6, "19", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Outdoor Activity", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Playground Games", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count19_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excelling in Sports", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count19_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Non-contact Games", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count19_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 19 ends */

        /* Question 20 starts */
        $q20sql = "SELECT q20 FROM answers WHERE area = '$area' AND society = '$society'";
        $q20res = mysqli_query($conn, $q20sql) or die(mysqli_error($conn));
        while ($q20row = mysqli_fetch_assoc($q20res)) {
            if ($q20row['q20'] == 1) {
                $count20_1++;
            } elseif ($q20row['q20'] == 2) {
                $count20_2++;
            } elseif ($q20row['q20'] == 3) {
                $count20_3++;
            }
        }
        $pdf->Cell(20, 6, "20", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Social Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Needs Assistance", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count20_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Self-motivated and Loner", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count20_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Sociable and Friendly", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count20_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 20 ends */

        /* Question 21 starts */
        $q21sql = "SELECT q21 FROM answers WHERE area = '$area' AND society = '$society'";
        $q21res = mysqli_query($conn, $q21sql) or die(mysqli_error($conn));
        while ($q21row = mysqli_fetch_assoc($q21res)) {
            if ($q21row['q21'] == 1) {
                $count21_1++;
            } elseif ($q21row['q21'] == 2) {
                $count21_2++;
            } elseif ($q21row['q21'] == 3) {
                $count21_3++;
            }
        }
        $pdf->Cell(20, 6, "21", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Controlling Emotions", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Aggressive", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count21_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Shy and Uncomfortable", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count21_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Sympathetic", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count21_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 21 ends */

        /* Question 22 starts */
        $q22sql = "SELECT q22 FROM answers WHERE area = '$area' AND society = '$society'";
        $q22res = mysqli_query($conn, $q22sql) or die(mysqli_error($conn));
        while ($q22row = mysqli_fetch_assoc($q22res)) {
            if ($q22row['q22'] == 1) {
                $count22_1++;
            } elseif ($q22row['q22'] == 2) {
                $count22_2++;
            } elseif ($q22row['q22'] == 3) {
                $count22_3++;
            }
        }
        $pdf->Cell(20, 6, "22", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Memory Skills", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Action-oriented", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count22_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Writing and mental pictures", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count22_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Listening and self-talking", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count22_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 22 ends */

        /* Question 23 starts */
        $q23sql = "SELECT q23 FROM answers WHERE area = '$area' AND society = '$society'";
        $q23res = mysqli_query($conn, $q23sql) or die(mysqli_error($conn));
        while ($q23row = mysqli_fetch_assoc($q23res)) {
            if ($q23row['q23'] == 1) {
                $count23_1++;
            } elseif ($q23row['q23'] == 2) {
                $count23_2++;
            } elseif ($q23row['q23'] == 3) {
                $count23_3++;
            }
        }
        $pdf->Cell(20, 6, "23", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "At School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excelling only in projects", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count23_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Excellent in Languages and Reading", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count23_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent in Science, Maths and Computers", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count23_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 23 ends */

        /* Question 24 starts */
        $q24sql = "SELECT q24 FROM answers WHERE area = '$area' AND society = '$society'";
        $q24res = mysqli_query($conn, $q24sql) or die(mysqli_error($conn));
        while ($q24row = mysqli_fetch_assoc($q24res)) {
            if ($q24row['q24'] == 1) {
                $count24_1++;
            } elseif ($q24row['q24'] == 2) {
                $count24_2++;
            } elseif ($q24row['q24'] == 3) {
                $count24_3++;
            }
        }
        $pdf->Cell(20, 6, "24", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Study Hours", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Hectic life", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count24_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Only homework", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count24_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Comprehensive Study", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count24_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 24 ends */

        /* Question 25 starts */
        $q25sql = "SELECT q25 FROM answers WHERE area = '$area' AND society = '$society'";
        $q25res = mysqli_query($conn, $q25sql) or die(mysqli_error($conn));
        while ($q25row = mysqli_fetch_assoc($q25res)) {
            if ($q25row['q25'] == 1) {
                $count25_1++;
            } elseif ($q25row['q25'] == 2) {
                $count25_2++;
            } elseif ($q25row['q25'] == 3) {
                $count25_3++;
            }
        }
        $pdf->Cell(20, 6, "25", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Goal Setting", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "One Grade Above", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count25_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Basic Improvement", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count25_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Top Scoring", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count25_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 25 ends */

        /* Question 26 starts */
        $q26sql = "SELECT q26 FROM answers WHERE area = '$area' AND society = '$society'";
        $q26res = mysqli_query($conn, $q26sql) or die(mysqli_error($conn));
        while ($q26row = mysqli_fetch_assoc($q26res)) {
            if ($q26row['q26'] == 1) {
                $count26_1++;
            } elseif ($q26row['q26'] == 2) {
                $count26_2++;
            } elseif ($q26row['q26'] == 3) {
                $count26_3++;
            }
        }
        $pdf->Cell(20, 6, "26", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Parental Support", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count26_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "On Weekends and Holidays", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count26_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Regular", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count26_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 26 ends */

        /* Question 27 starts */
        $q27sql = "SELECT q27 FROM answers WHERE area = '$area' AND society = '$society'";
        $q27res = mysqli_query($conn, $q27sql) or die(mysqli_error($conn));
        while ($q27row = mysqli_fetch_assoc($q27res)) {
            if ($q27row['q27'] == 1) {
                $count27_1++;
            } elseif ($q27row['q27'] == 2) {
                $count27_2++;
            } elseif ($q27row['q27'] == 3) {
                $count27_3++;
            }
        }
        $pdf->Cell(20, 6, "27", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Expectation from School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Assignment for framing questions", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count27_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Applying Frequent Revision Techniques", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count27_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Workshop Method with like-minded group", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count27_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 27 ends */
        
        $pdf->Cell(0, 10, '', 0, 1);

        /* Question 28 starts */
        $q28sql = "SELECT q28 FROM answers WHERE area = '$area' AND society = '$society'";
        $q28res = mysqli_query($conn, $q28sql) or die(mysqli_error($conn));
        while ($q28row = mysqli_fetch_assoc($q28res)) {
            if ($q28row['q28'] == 1) {
                $count28_1++;
            } elseif ($q28row['q28'] == 2) {
                $count28_2++;
            } elseif ($q28row['q28'] == 3) {
                $count28_3++;
            }
        }
        $pdf->Cell(20, 6, "28", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Preparedness for study", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "No time", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count28_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Advance Study", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count28_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Intensive and Referential Study", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count28_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 28 ends */

        /* Question 29 starts */
        $q29sql = "SELECT q29 FROM answers WHERE area = '$area' AND society = '$society'";
        $q29res = mysqli_query($conn, $q29sql) or die(mysqli_error($conn));
        while ($q29row = mysqli_fetch_assoc($q29res)) {
            if ($q29row['q29'] == 1) {
                $count29_1++;
            } elseif ($q29row['q29'] == 2) {
                $count29_2++;
            } elseif ($q29row['q29'] == 3) {
                $count29_3++;
            }
        }
        $pdf->Cell(20, 6, "29", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Revision of Chapters", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A few days before exam", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count29_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Dependent on School notes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count29_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Own notes preparation", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count29_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 29 ends */

        /* Question 30 starts */
        $q30sql = "SELECT q30 FROM answers WHERE area = '$area' AND society = '$society'";
        $q30res = mysqli_query($conn, $q30sql) or die(mysqli_error($conn));
        while ($q30row = mysqli_fetch_assoc($q30res)) {
            if ($q30row['q30'] == 1) {
                $count30_1++;
            } elseif ($q30row['q30'] == 2) {
                $count30_2++;
            } elseif ($q30row['q30'] == 3) {
                $count30_3++;
            }
        }
        $pdf->Cell(20, 6, "30", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Favourite Subjects", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Languages, S.St., Arts", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count30_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Maths, Science, Computing", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count30_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "All the subjects", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count30_3 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 30 ends */

        /* Question 31 starts */
        $q31sql = "SELECT q31 FROM answers WHERE area = '$area' AND society = '$society'";
        $q31res = mysqli_query($conn, $q31sql) or die(mysqli_error($conn));
        while ($q31row = mysqli_fetch_assoc($q31res)) {
            if ($q31row['q31'] == 'A') {
                $count31_1++;
            } elseif ($q31row['q31'] == 'B') {
                $count31_2++;
            } elseif ($q31row['q31'] == 'C') {
                $count31_3++;
            } elseif ($q31row['q31'] == 'D') {
                $count31_4++;
            } elseif ($q31row['q31'] == 'E') {
                $count31_5++;
            }
        }
        $pdf->Cell(20, 6, "31", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Grade in Exams", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "B", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "C", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "D", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count31_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "E", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count31_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 31 ends */

        /* Question 32 starts */
        $q32sql = "SELECT q32 FROM answers WHERE area = '$area' AND society = '$society'";
        $q32res = mysqli_query($conn, $q32sql) or die(mysqli_error($conn));
        while ($q32row = mysqli_fetch_assoc($q32res)) {
            if ($q32row['q32'] == 'Yes') {
                $count32_1++;
            } elseif ($q32row['q32'] == 'No') {
                $count32_2++;
            }
        }
        $pdf->Cell(20, 6, "32", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Performance in School", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Satisfied", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count32_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Not satisfied", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count32_2 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 32 ends */

        /* Question 33 starts */
        $q33sql = "SELECT q33 FROM answers WHERE area = '$area' AND society = '$society'";
        $q33res = mysqli_query($conn, $q33sql) or die(mysqli_error($conn));
        while ($q33row = mysqli_fetch_assoc($q33res)) {
            if ($q33row['q33'] == 0) {
                $count33_1++;
            } elseif ($q33row['q33'] == 0.25) {
                $count33_2++;
            } elseif ($q33row['q33'] == 0.5) {
                $count33_3++;
            } elseif ($q33row['q33'] == 0.75) {
                $count33_4++;
            } elseif ($q33row['q33'] == 1) {
                $count33_5++;
            }
        }
        $pdf->Cell(20, 6, "33", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Helpfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count33_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count33_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 33 ends */

        /* Question 34 starts */
        $q34sql = "SELECT q34 FROM answers WHERE area = '$area' AND society = '$society'";
        $q34res = mysqli_query($conn, $q34sql) or die(mysqli_error($conn));
        while ($q34row = mysqli_fetch_assoc($q34res)) {
            if ($q34row['q34'] == 0) {
                $count34_1++;
            } elseif ($q34row['q34'] == 0.25) {
                $count34_2++;
            } elseif ($q34row['q34'] == 0.5) {
                $count34_3++;
            } elseif ($q34row['q34'] == 0.75) {
                $count34_4++;
            } elseif ($q34row['q34'] == 1) {
                $count34_5++;
            }
        }
        $pdf->Cell(20, 6, "34", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Friendliness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count34_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count34_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 34 ends */

        /* Question 35 starts */
        $q35sql = "SELECT q35 FROM answers WHERE area = '$area' AND society = '$society'";
        $q35res = mysqli_query($conn, $q35sql) or die(mysqli_error($conn));
        while ($q35row = mysqli_fetch_assoc($q35res)) {
            if ($q35row['q35'] == 0) {
                $count35_1++;
            } elseif ($q35row['q35'] == 0.25) {
                $count35_2++;
            } elseif ($q35row['q35'] == 0.5) {
                $count35_3++;
            } elseif ($q35row['q35'] == 0.75) {
                $count35_4++;
            } elseif ($q35row['q35'] == 1) {
                $count35_5++;
            }
        }
        $pdf->Cell(20, 6, "35", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Puzzle Solving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count35_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count35_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 35 ends */

        /* Question 36 starts */
        $q36sql = "SELECT q36 FROM answers WHERE area = '$area' AND society = '$society'";
        $q36res = mysqli_query($conn, $q36sql) or die(mysqli_error($conn));
        while ($q36row = mysqli_fetch_assoc($q36res)) {
            if ($q36row['q36'] == 0) {
                $count36_1++;
            } elseif ($q36row['q36'] == 0.25) {
                $count36_2++;
            } elseif ($q36row['q36'] == 0.5) {
                $count36_3++;
            } elseif ($q36row['q36'] == 0.75) {
                $count36_4++;
            } elseif ($q36row['q36'] == 1) {
                $count36_5++;
            }
        }
        $pdf->Cell(20, 6, "36", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Time Management during exams", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count36_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count36_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 36 ends */

        /* Question 37 starts */
        $q37sql = "SELECT q37 FROM answers WHERE area = '$area' AND society = '$society'";
        $q37res = mysqli_query($conn, $q37sql) or die(mysqli_error($conn));
        while ($q37row = mysqli_fetch_assoc($q37res)) {
            if ($q37row['q37'] == 0) {
                $count37_1++;
            } elseif ($q37row['q37'] == 0.25) {
                $count37_2++;
            } elseif ($q37row['q37'] == 0.5) {
                $count37_3++;
            } elseif ($q37row['q37'] == 0.75) {
                $count37_4++;
            } elseif ($q37row['q37'] == 1) {
                $count37_5++;
            }
        }
        $pdf->Cell(20, 6, "37", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Supporting Parents", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count37_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count37_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 37 ends */
        
        $pdf->Cell(0, 10, '', 0, 1);

        /* Question 38 starts */
        $q38sql = "SELECT q38 FROM answers WHERE area = '$area' AND society = '$society'";
        $q38res = mysqli_query($conn, $q38sql) or die(mysqli_error($conn));
        while ($q38row = mysqli_fetch_assoc($q38res)) {
            if ($q38row['q38'] == 0) {
                $count38_1++;
            } elseif ($q38row['q38'] == 0.25) {
                $count38_2++;
            } elseif ($q38row['q38'] == 0.5) {
                $count38_3++;
            } elseif ($q38row['q38'] == 0.75) {
                $count38_4++;
            } elseif ($q38row['q38'] == 1) {
                $count38_5++;
            }
        }
        $pdf->Cell(20, 6, "38", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Competitivity", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count38_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count38_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 38 ends */

        /* Question 39 starts */
        $q39sql = "SELECT q39 FROM answers WHERE area = '$area' AND society = '$society'";
        $q39res = mysqli_query($conn, $q39sql) or die(mysqli_error($conn));
        while ($q39row = mysqli_fetch_assoc($q39res)) {
            if ($q39row['q39'] == 0) {
                $count39_1++;
            } elseif ($q39row['q39'] == 0.25) {
                $count39_2++;
            } elseif ($q39row['q39'] == 0.5) {
                $count39_3++;
            } elseif ($q39row['q39'] == 0.75) {
                $count39_4++;
            } elseif ($q39row['q39'] == 1) {
                $count39_5++;
            }
        }
        $pdf->Cell(20, 6, "39", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Respectfulness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count39_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count39_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 39 ends */

        /* Question 40 starts */
        $q40sql = "SELECT q40 FROM answers WHERE area = '$area' AND society = '$society'";
        $q40res = mysqli_query($conn, $q40sql) or die(mysqli_error($conn));
        while ($q40row = mysqli_fetch_assoc($q40res)) {
            if ($q40row['q40'] == 1) {
                $count40_1++;
            } elseif ($q40row['q40'] == 0.75) {
                $count40_2++;
            } elseif ($q40row['q40'] == 0.5) {
                $count40_3++;
            } elseif ($q40row['q40'] == 0.25) {
                $count40_4++;
            } elseif ($q40row['q40'] == 0) {
                $count40_5++;
            }
        }
        $pdf->Cell(20, 6, "40", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Facebook, Whatsapp", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count40_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count40_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 40 ends */

        /* Question 41 starts */
        $q41sql = "SELECT q41 FROM answers WHERE area = '$area' AND society = '$society'";
        $q41res = mysqli_query($conn, $q41sql) or die(mysqli_error($conn));
        while ($q41row = mysqli_fetch_assoc($q41res)) {
            if ($q41row['q41'] == 0) {
                $count41_1++;
            } elseif ($q41row['q41'] == 0.25) {
                $count41_2++;
            } elseif ($q41row['q41'] == 0.5) {
                $count41_3++;
            } elseif ($q41row['q41'] == 0.75) {
                $count41_4++;
            } elseif ($q41row['q41'] == 1) {
                $count41_5++;
            }
        }
        $pdf->Cell(20, 6, "41", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Reading Books", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count41_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count41_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 41 ends */

        /* Question 42 starts */
        $q42sql = "SELECT q42 FROM answers WHERE area = '$area' AND society = '$society'";
        $q42res = mysqli_query($conn, $q42sql) or die(mysqli_error($conn));
        while ($q42row = mysqli_fetch_assoc($q42res)) {
            if ($q42row['q42'] == 0) {
                $count42_1++;
            } elseif ($q42row['q42'] == 0.25) {
                $count42_2++;
            } elseif ($q42row['q42'] == 0.5) {
                $count42_3++;
            } elseif ($q42row['q42'] == 0.75) {
                $count42_4++;
            } elseif ($q42row['q42'] == 1) {
                $count42_5++;
            }
        }
        $pdf->Cell(20, 6, "42", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Writing Habits", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count42_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count42_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 42 ends */

        /* Question 43 starts */
        $q43sql = "SELECT q43 FROM answers WHERE area = '$area' AND society = '$society'";
        $q43res = mysqli_query($conn, $q43sql) or die(mysqli_error($conn));
        while ($q43row = mysqli_fetch_assoc($q43res)) {
            if ($q43row['q43'] == 0) {
                $count43_1++;
            } elseif ($q43row['q43'] == 0.25) {
                $count43_2++;
            } elseif ($q43row['q43'] == 0.5) {
                $count43_3++;
            } elseif ($q43row['q43'] == 0.75) {
                $count43_4++;
            } elseif ($q43row['q43'] == 1) {
                $count43_5++;
            }
        }
        $pdf->Cell(20, 6, "43", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Early Rising", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count43_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count43_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 43 ends */

        /* Question 44 starts */
        $q44sql = "SELECT q44 FROM answers WHERE area = '$area' AND society = '$society'";
        $q44res = mysqli_query($conn, $q44sql) or die(mysqli_error($conn));
        while ($q44row = mysqli_fetch_assoc($q44res)) {
            if ($q44row['q44'] == 0) {
                $count44_1++;
            } elseif ($q44row['q44'] == 0.25) {
                $count44_2++;
            } elseif ($q44row['q44'] == 0.5) {
                $count44_3++;
            } elseif ($q44row['q44'] == 0.75) {
                $count44_4++;
            } elseif ($q44row['q44'] == 1) {
                $count44_5++;
            }
        }
        $pdf->Cell(20, 6, "44", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Memory Power", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count44_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count44_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 44 ends */

        /* Question 45 starts */
        $q45sql = "SELECT q45 FROM answers WHERE area = '$area' AND society = '$society'";
        $q45res = mysqli_query($conn, $q45sql) or die(mysqli_error($conn));
        while ($q45row = mysqli_fetch_assoc($q45res)) {
            if ($q45row['q45'] == 0) {
                $count45_1++;
            } elseif ($q45row['q45'] == 0.25) {
                $count45_2++;
            } elseif ($q45row['q45'] == 0.5) {
                $count45_3++;
            } elseif ($q45row['q45'] == 0.75) {
                $count45_4++;
            } elseif ($q45row['q45'] == 1) {
                $count45_5++;
            }
        }
        $pdf->Cell(20, 6, "45", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Managing daily Self Study", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count45_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count45_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 45 ends */

        $pdf->Cell(0, 21, '', 0, 1);
        
        /* Question 46 starts */
        $q46sql = "SELECT q46 FROM answers WHERE area = '$area' AND society = '$society'";
        $q46res = mysqli_query($conn, $q46sql) or die(mysqli_error($conn));
        while ($q46row = mysqli_fetch_assoc($q46res)) {
            if ($q46row['q46'] == 1) {
                $count46_1++;
            } elseif ($q46row['q46'] == 0.75) {
                $count46_2++;
            } elseif ($q46row['q46'] == 0.5) {
                $count46_3++;
            } elseif ($q46row['q46'] == 0.25) {
                $count46_4++;
            } elseif ($q46row['q46'] == 0) {
                $count46_5++;
            }
        }
        $pdf->Cell(20, 6, "46", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Cellular Phone addiction", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LRT', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count46_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count46_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 46 ends */

        /* Question 47 starts */
        $q47sql = "SELECT q47 FROM answers WHERE area = '$area' AND society = '$society'";
        $q47res = mysqli_query($conn, $q47sql) or die(mysqli_error($conn));
        while ($q47row = mysqli_fetch_assoc($q47res)) {
            if ($q47row['q47'] == 1) {
                $count47_1++;
            } elseif ($q47row['q47'] == 0.75) {
                $count47_2++;
            } elseif ($q47row['q47'] == 0.5) {
                $count47_3++;
            } elseif ($q47row['q47'] == 0.25) {
                $count47_4++;
            } elseif ($q47row['q47'] == 0) {
                $count47_5++;
            }
        }
        $pdf->Cell(20, 6, "47", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Talkativeness", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count47_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count47_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 47 ends */

        /* Question 48 starts */
        $q48sql = "SELECT q48 FROM answers WHERE area = '$area' AND society = '$society'";
        $q48res = mysqli_query($conn, $q48sql) or die(mysqli_error($conn));
        while ($q48row = mysqli_fetch_assoc($q48res)) {
            if ($q48row['q48'] == 1) {
                $count48_1++;
            } elseif ($q48row['q48'] == 0.75) {
                $count48_2++;
            } elseif ($q48row['q48'] == 0.5) {
                $count48_3++;
            } elseif ($q48row['q48'] == 0.25) {
                $count48_4++;
            } elseif ($q48row['q48'] == 0) {
                $count48_5++;
            }
        }
        $pdf->Cell(20, 6, "48", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Wasting Time", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count48_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count48_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 48 ends */

        /* Question 49 starts */
        $q49sql = "SELECT q49 FROM answers WHERE area = '$area' AND society = '$society'";
        $q49res = mysqli_query($conn, $q49sql) or die(mysqli_error($conn));
        while ($q49row = mysqli_fetch_assoc($q49res)) {
            if ($q49row['q49'] == 1) {
                $count49_1++;
            } elseif ($q49row['q49'] == 0.75) {
                $count49_2++;
            } elseif ($q49row['q49'] == 0.5) {
                $count49_3++;
            } elseif ($q49row['q49'] == 0.25) {
                $count49_4++;
            } elseif ($q49row['q49'] == 0) {
                $count49_5++;
            }
        }
        $pdf->Cell(20, 6, "49", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Telling Lies", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count49_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count49_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 49 ends */

        /* Question 50 starts */
        $q50sql = "SELECT q50 FROM answers WHERE area = '$area' AND society = '$society'";
        $q50res = mysqli_query($conn, $q50sql) or die(mysqli_error($conn));
        while ($q50row = mysqli_fetch_assoc($q50res)) {
            if ($q50row['q50'] == 1) {
                $count50_1++;
            } elseif ($q50row['q50'] == 0.75) {
                $count50_2++;
            } elseif ($q50row['q50'] == 0.5) {
                $count50_3++;
            } elseif ($q50row['q50'] == 0.25) {
                $count50_4++;
            } elseif ($q50row['q50'] == 0) {
                $count50_5++;
            }
        }
        $pdf->Cell(20, 6, "50", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Quarrelling", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count50_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count50_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 50 ends */

        /* Question 51 starts */
        $q51sql = "SELECT q51 FROM answers WHERE area = '$area' AND society = '$society'";
        $q51res = mysqli_query($conn, $q51sql) or die(mysqli_error($conn));
        while ($q51row = mysqli_fetch_assoc($q51res)) {
            if ($q51row['q51'] == 1) {
                $count51_1++;
            } elseif ($q51row['q51'] == 0.75) {
                $count51_2++;
            } elseif ($q51row['q51'] == 0.5) {
                $count51_3++;
            } elseif ($q51row['q51'] == 0.25) {
                $count51_4++;
            } elseif ($q51row['q51'] == 0) {
                $count51_5++;
            }
        }
        $pdf->Cell(20, 6, "51", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Deceiving", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Never", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Sometimes", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Generally", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Most Often", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count51_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Always", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count51_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 51 ends */

        /* Question 52 starts */
        $q52sql = "SELECT q52 FROM answers WHERE area = '$area' AND society = '$society'";
        $q52res = mysqli_query($conn, $q52sql) or die(mysqli_error($conn));
        while ($q52row = mysqli_fetch_assoc($q52res)) {
            if ($q52row['q52'] == 0) {
                $count52_1++;
            } elseif ($q52row['q52'] == 0.25) {
                $count52_2++;
            } elseif ($q52row['q52'] == 0.5) {
                $count52_3++;
            } elseif ($q52row['q52'] == 0.75) {
                $count52_4++;
            } elseif ($q52row['q52'] == 1) {
                $count52_5++;
            }
        }
        $pdf->Cell(20, 6, "52", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Survey Feedback", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Boring & Lengthy", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Fair", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Good", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "Very Good", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count52_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "Excellent", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count52_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 52 ends */

        /* Question 53 starts */
        $q53sql = "SELECT sum FROM answers WHERE area = '$area' AND society = '$society'";
        $q53res = mysqli_query($conn, $q53sql) or die(mysqli_error($conn));
        while ($q53row = mysqli_fetch_assoc($q53res)) {
            if ($q53row['sum'] >= 81) {
                $count53_1++;
            } elseif ($q53row['sum'] >= 61 && $q53row['sum'] < 81) {
                $count53_2++;
            } elseif ($q53row['sum'] >= 41 && $q53row['sum'] < 61) {
                $count53_3++;
            } elseif ($q53row['sum'] >= 33 && $q53row['sum'] < 41) {
                $count53_4++;
            } elseif ($q53row['sum'] >= 00 && $q53row['sum'] < 33) {
                $count53_5++;
            }
        }
        $pdf->Cell(20, 6, "53", 'LRT', 0, 'C');
        $pdf->Cell(130, 6, "Grade in the Survey", 'LRT');
        $pdf->Cell(40, 5, ' ', 'LR', 1);
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "A(81-100)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_1 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "B(61-80)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_2 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "C(41-60)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_3 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LR');
        $pdf->Cell(40, 5, ' ', 'L');
        $pdf->Cell(90, 5, "D(33-40)", 'R');
        $pdf->Cell(40, 5, number_format((float) ($count53_4 / $querynum) * 100, 2, '.', ''), 'LR', 1, 'C');
        $pdf->Cell(20, 5, ' ', 'LRB');
        $pdf->Cell(40, 5, ' ', 'LB');
        $pdf->Cell(90, 5, "E(00-32)", 'RB');
        $pdf->Cell(40, 5, number_format((float) ($count53_5 / $querynum) * 100, 2, '.', ''), 'LRB', 1, 'C');
        /* Question 53 ends */
    } else {
        $pdf->Cell(0, 5, "There are no records.", 0, 0, 'C');
    }
}
$pdf->Output();
?>