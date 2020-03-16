<?php
session_start();

?>
<?php
$UName=$_SESSION["UName"];
$pass=$_POST["Npass"];


$servername = "localhost";
$username = "root";

$dbname = "xcompany";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="UPDATE reg SET password='$pass' WHERE UName='$UName'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


?>
