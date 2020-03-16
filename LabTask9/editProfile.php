<?php
session_start();

?>
<?php
$UName=$_SESSION["UName"];
$name=$_POST["name"];
$gender= $_POST["gender"];

$email= $_POST["email"];
$dob= $_POST["dob"];

$servername = "localhost";
$username = "root";

$dbname = "xcompany";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="UPDATE reg SET name='$name',gender='$gender',email='$email',dob='$dob' WHERE UName='$UName'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$_SESSION["name"]=$name;
$_SESSION["gender"]=$gender;
$_SESSION["email"]=$email;
$_SESSION["dob"]=$dob;



?>