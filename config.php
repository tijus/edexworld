<?php
$servername = "mysql.hostinger.in";
$username = "u581423896_edexw";
$password = "1sujitamit*";
$dbname = "u581423896_edex";


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edexdb";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>