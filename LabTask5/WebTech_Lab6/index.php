<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="img.php" method="post">
	<label>Name</label>
	<input type="text" name="name"><br><br>
	<label>Email</label>
	<input type="text" name="email"><br><br>
	<label>Gender</label>
	<input type="radio" name="radio" value="male">Male
	<input type="radio" name="radio" vaule="female">Female<br><br>
	<label>Password</label>
	<input type="text" name="pass"><br><br><br>
	<input type="submit" name="Sign In"><br>
	<a href="login.php" >Already Registed!</a>
</form>
</body>
</html>



