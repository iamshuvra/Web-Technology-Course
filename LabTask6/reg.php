<?php

session_start();

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gender = $_SESSION["gender"];
$pass = $_SESSION["password"];


$image = $_FILES['file']['name'];

  //$target_dir = "upload/";
  //$target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  //$extensions_arr = array("jpg","jpeg","png","gif");

     // Upload file
     //move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Reg_Info (Name, Email, Gender, password, image)
VALUES ('$name', '$email', '$gender', '$pass', '$image')";

//$_SESSION["image"]=$img;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Registration successful</h1>
  <a href="Login.php">Login</a>
</body>
</html>