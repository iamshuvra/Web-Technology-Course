<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "INSERT INTO user (UserName, Password) VALUES ('$name','$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('location:Login.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>