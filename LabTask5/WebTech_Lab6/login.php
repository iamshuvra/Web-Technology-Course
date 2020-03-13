
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<label>Email</label>
	<input type="text" name="email"><br><br>
	<label>Password</label>
	<input type="password" name="pass"><br><br><br>
	<input type="submit" name="SignIn">
</form>
</body>
</html>

<?php 

if(isset($_POST['SignIn'])){

$ema= $_POST["email"];
    $pas= $_POST["pass"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechlab6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  	$sql= "SELECT * FROM user WHERE Password='$pas' and Email='$ema'";
  	$result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_assoc($result);

  	if($ema==$row["Email"] && $pas==$row["Password"])
  		include('welcome.php');
  	else
  		echo "sorry";

$conn->close();
}
?>