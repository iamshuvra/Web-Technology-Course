<DOCTYPE html>
<html>
<p><a href="home.html"><u>Home</u></a> | <a href="login.html"><u>Login</u></a> | <a href="registration.html"><u>Registration</u></a>

<?php
$name= $_POST["name"];
$email= $_POST["Email"];
$password= $_POST["Password"];
$UName= $_POST["UName"];
$gender= $_POST["gender"];
$dob= $_POST["DOB"];


?>

<?php
$servername = "localhost";
$username = "root";

$dbname = "xcompany";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO reg (name, UName,password,gender, dob, email)
VALUES ('$name', '$UName', '$password' , '$gender','$dob' ,'$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</html>