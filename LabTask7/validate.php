<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$em = $_POST['name'];
$pass = $_POST['pass'];

$sql = "Select * from user where UserName= '$em' and Password='$pass'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	header('location:Homepage.php');
}
else{
	header('location:Login.php');
}

$conn->close();

?>