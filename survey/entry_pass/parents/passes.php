<?php

require("fpdf/fpdf.php");

$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetMargins(5, 5, 5);
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

$sql_query = "SELECT * FROM entry_pass_parents";
$res_query = mysqli_query($con, $sql_query);
$xPos = 13;
$yPos = 6;
$y = 0;
$xP = 113;
$yP = 6;
$xPosition = 18;
$yPosition = 11;
$xPo = 113;
$yPo = 11;
$width = 13;
$height = 13;
$count = 0;
$pdf->Cell(95, 285, '', 1);
$pdf->SetX(105);
$pdf->Cell(95, 285, '', 1);
while ($row_query = mysqli_fetch_assoc($res_query)) {
    $id = $row_query['id'];
    $name = $row_query['name'];
    $email = $row_query['email'];
    $society = $row_query['society'];
    $flat = $row_query['flat'];
    $contact = $row_query['contact'];
    if (floor($count / 10) % 2 == 0) {
        if (floor($count / 5) % 2 == 0) {
            $pdf->SetFillColor(255, 244, 233);
            $pdf->SetX(10);
            $pdf->Cell(85, 6, 'Edexworld Empowerment Pvt. Ltd.', 'LRT', 2, 'R', 'true');
            $pdf->Cell(85, 5, 'Contact: 9222976881', 'LR', 2, 'R', 'true');
            $pdf->SetFont('Arial', 'BU', 10);
            $pdf->Cell(85, 6, 'Entry Pass (Workshop)', 'LRB', 2, 'C', 'true');
            $pdf->Image("logo.jpg", $xPos, $yPos, $width, $height);
            $pdf->SetFillColor(205, 244, 233);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(85, 11, '"MAKING OF A TOP SCORER CHILD"', 1, 2, 'C', 'true');
            $pdf->SetFont('Arial', 'B', 10);

            $pdf->SetFillColor(255, 255, 255);
            $pdf->Cell(85, 5, 'ID: ' . $id, 'LRT', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Name: ' . $name, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Email:' . $email, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'CHS:' . $society, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Flat No.: ' . $flat . '     Contact: ' . $contact, 'LRB', 2, 'L', 'true');
            $pdf->Cell(0, 5, '', '', 1);

            $yPos += 58;
        } else {
            $pdf->SetFillColor(255, 244, 233);
            $pdf->SetXY(110, $y + 5);
            $pdf->Cell(85, 6, 'Edexworld Empowerment Pvt. Ltd.', 'LRT', 2, 'R', 'true');
            $pdf->Cell(85, 5, 'Contact: 9222976881', 'LR', 2, 'R', 'true');
            $pdf->SetFont('Arial', 'BU', 10);
            $pdf->Cell(85, 6, 'Entry Pass (Workshop)', 'LRB', 2, 'C', 'true');
            $pdf->Image("logo.jpg", $xP, $yP, $width, $height);

            $pdf->SetFillColor(205, 244, 233);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(85, 11, '"MAKING OF A TOP SCORER CHILD"', 1, 2, 'C', 'true');
            $pdf->SetFont('Arial', 'B', 10);

            $pdf->SetFillColor(255, 255, 255);
            $pdf->Cell(85, 5, 'ID: ' . $id, 'LRT', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Name: ' . $name, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Email:' . $email, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'CHS:' . $society, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Flat No.: ' . $flat . '     Contact: ' . $contact, 'LRB', 2, 'L', 'true');
            $pdf->Cell(0, 5, '', '', 1);

            $yP += 58;
            $y += 58;
        }
        $count += 1;
    } else {
        $pdf->AddPage();
        $pdf->Cell(95, 285, '', 1);
        $pdf->SetX(105);
        $pdf->Cell(95, 285, '', 1);
        $count = 0;
        $xPos = 13;
        $yPos = 6;
        $y = 0;
        $xP = 113;
        $yP = 6;
        $xPosition = 18;
        $yPosition = 11;
        $xPo = 113;
        $yPo = 11;
        $width = 13;
        $height = 13;

        if (floor($count / 5) % 2 == 0) {
            $pdf->SetFillColor(255, 244, 233);
            $pdf->SetX(10);
            $pdf->Cell(85, 6, 'Edexworld Empowerment Pvt. Ltd.', 'LRT', 2, 'R', 'true');
            $pdf->Cell(85, 5, 'Contact: 9222976881', 'LR', 2, 'R', 'true');
            $pdf->SetFont('Arial', 'BU', 10);
            $pdf->Cell(85, 6, 'Entry Pass (Workshop)', 'LRB', 2, 'C', 'true');
            $pdf->Image("logo.jpg", $xPos, $yPos, $width, $height);

            $pdf->SetFillColor(205, 244, 233);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(85, 11, '"MAKING OF A TOP SCORER CHILD"', 1, 2, 'C', 'true');
            $pdf->SetFont('Arial', 'B', 10);

            $pdf->SetFillColor(255, 255, 255);
            $pdf->Cell(85, 5, 'ID: ' . $id, 'LRT', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Name: ' . $name, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Email:' . $email, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'CHS:' . $society, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Flat No.: ' . $flat . '     Contact: ' . $contact, 'LRB', 2, 'L', 'true');
            $pdf->Cell(0, 5, '', '', 1);

            $yPos += 58;
        } elseif (floor($count / 5) % 2 != 0) {
            $pdf->SetFillColor(255, 244, 233);
            $pdf->SetXY(110, $y + 10);
            $pdf->Cell(85, 6, 'Edexworld Empowerment Pvt. Ltd.', 'LRT', 2, 'R', 'true');
            $pdf->Cell(85, 5, 'Contact: 9222976881', 'LR', 2, 'R', 'true');
            $pdf->SetFont('Arial', 'BU', 10);
            $pdf->Cell(85, 6, 'Entry Pass (Workshop)', 'LRB', 2, 'C', 'true');
            $pdf->Image("logo.jpg", $xP, $yP, $width, $height);

            $pdf->SetFillColor(205, 244, 233);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(85, 11, '"MAKING OF A TOP SCORER CHILD"', 1, 2, 'C', 'true');
            $pdf->SetFont('Arial', 'B', 10);

            $pdf->SetFillColor(255, 255, 255);
            $pdf->Cell(85, 5, 'ID: ' . $id, 'LRT', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Name: ' . $name, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Email:' . $email, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'CHS:' . $society, 'LR', 2, 'L', 'true');
            $pdf->Cell(85, 5, 'Flat No.: ' . $flat . '     Contact: ' . $contact, 'LRB', 2, 'L', 'true');
            $pdf->Cell(0, 5, '', '', 1);

            $yP += 58;
            $y += 58;
        }
        $count += 1;
    }
}

$pdf->Output();

mysqli_close($con);
?>