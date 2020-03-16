<?PHP
session_start();

?>

<!DOCTYPE html>
<html>

<head>

	<title>xCompany</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">

</head>

<body>

	<section class="sec-index">
	
		<img src="Capture.PNG" alt="xCompany" class="logo-img">

		<div class="right-float">

			<p>Logged in as <u><?php echo $_SESSION["name"]; ?></u> | <a href=""><u>Logout</u></a></p>

		</div>

		<h3>Welcome to xCompany</h3>

		<div class="account">
			
			<p><strong>Account</strong></p>
			
			<ul>

				<li><a href="Dashboard.php"><u>Dashboard</u></a></li>
				<li><a href="ViewProfile.php"><u>View Profile</u></a></li>
				<li><a href="ProfileEdit.php"><u>Edit Profile</u><a/></li>
				<li><a href=""><u>Change Profile Picture</u></a></li>
				<li><a href="ChangePass.php"><u>Change Password</u></a></li>
				<li><a href="login.html"><u>Logout</u></a></li>

			</ul>

		</div>

		<div class="vertical-line"></div>

		<div class="welcome-name">

<form action="NewPass.php" method="post">
			
			<p><strong>CHANGE PASSWORD</strong><p>
				<ul>
				<li>Current Password : <input type="text" name="pass"></li> 
				<li>New Password : <input type="text" name="Npass"></li>
				<li>Retype New Password : <input type="text" name="Newpass" ></li>
				
				
					</ul>
					<input type="Submit" name="Submit">
</form>
		</div>

		<div class="image_user">
			<img src="user.jpg">
			

		</div>

		<p class="copyright">Copyright &copy; 2017<p>

	</section>
</body>
</html>
?>