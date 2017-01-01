<?php

include("config.php");
$uniqueelement=rand(0,9999);
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$father_name = $_POST["father_name"];
$address = $_POST["address"];
$state = $_POST["state"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$sex = $_POST["sex"];
$cat = $_POST["cat"];

$dob = $_POST["dob"];
//$image=$_POST["image"];
//$image=$_FILES["image"]["name"];
//echo $image;
$landline = $_POST["landline"];
$token = rand(1000000,9999999999);


$sql_check = "Select * from registrations where username ='" . $username . "' and email = '".$email."'";
//echo $sql;
$result = $conn->query($sql_check);
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        header("Location:registration.php?status=exists");
    }
} else {
    $target_dir = "pics/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo 'alert("Sorry, file already exists.")';
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $newname = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO registrations (uniqueelement,first_name, last_name, father_name, address, state, email, mobile, username, password, confirm_password, sex, dob, image, landline, cat, verify, token)
VALUES ('$uniqueelement','$first_name', '$last_name', '$father_name', '$address', '$state', '$email', '$mobile', '$username', '$password', '$confirm_password', '$sex', '$dob', '$newname', '$landline', '$cat', 'None', '$token')";

    if ($conn->query($sql) === TRUE) {
		if($cat=="Student")
		{
		  header("Location:student.php?key=".$uniqueelement);
		}
		elseif($cat=="Tutor")
		{
		  header("Location:tutor.php?key=".$uniqueelement);
		}

		else
		{
	      header("Location:registration.php?status=failure");
		}
		
    }   else
	{
	     header("Location:registration.php?status=failure");

	}
}


$conn->close();
?>		