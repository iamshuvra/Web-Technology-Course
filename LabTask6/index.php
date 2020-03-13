<?php
// Start the session
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="uploadimg.php" method="post">
	<label>Name</label>
	<input type="text" name="name"><br><br>
	<label>Email</label>
	<input type="text" name="email"><br><br>
	<label>Gender</label>
	<input type="radio" name="radio" value="male">Male
	<input type="radio" name="radio" vaule="female">Female<br><br>
	<label>Password</label>
	<input type="password" name="pass"><br><br><br>
	<input type="submit" name="Sign In">
</form>

<br>
<a href="Login.php">Login</a>

</body>
</html>