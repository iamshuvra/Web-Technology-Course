<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$em = $_POST["email"];
$pass = $_POST["pass"];

	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Select * from reg_info where email= '$em' and password='$pass'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$_SESSION["image"] = $row['image'];
$_SESSION["name"] = $row['name'];
$_SESSION["email"] = $row['email'];
$_SESSION["gender"] = $row['gender'];

if ($result->num_rows > 0) {
	include("Homepage.php");
}
else{
	include("Homepage.php");
}

$conn->close();

?>