<!DOCTYPE html>
<html>

<head>

	<title>xCompany</title>
	<link rel="stylesheet" type="text/css" href="ChangePage.css">

</head>

<body>

	<section class="sec-index">
	
		<img src="Capture.PNG" alt="xCompany" class="logo-img">

		<div class="right-float">

			<p>Logged in as <u>"NAME"</u> | <a href=""><u>Logout</u></a></p>

		</div>

		<h3>Welcome to xCompany</h3>

		<div class="account">
			
			<p><strong>Account</strong></p>
			
			<ul>

				<li><a href=""><u>Dashboard</u></a></li>
				<li><a href=""><u>View Profile</u></a></li>
				<li><a href=""><u>Edit Profile</u><a/></li>
				<li><a href=""><u>Change Profile Picture</u></a></li>
				<li><a href=""><u>Change Password</u></a></li>
				<li><a href=""><u>Logout</u></a></li>

			</ul>

		</div>

		<div class="vertical-line"></div>

		<fieldset>
		  <legend>Edit Profile</legend>
		  <form action="action_page.php">
		  <div class="container">

		  	<label for="email"><b>Current Password :</b></label>
		    <input type="password" placeholder="Enter password" name="email" required class="rd1"><br><br>
		    <label for="email"><b>New Password :</b></label>
		    <input type="password" placeholder="Enter password" name="name" required class="rd1"><br><br>
		    <label for="email"><b>Re-type Password :</b></label>
		    <input type="password" placeholder="Enter password" name="name" required class="rd1"><br><br>
		    <div class="registerbtn">
		      <input type="submit" >
		  </div>
		  </div>

		  
		</form>
		</fieldset>

		<p class="copyright">Copyright &copy; 2017<p>

	</section>
</body>
</html>
