<!DOCTYPE html>
<html>

<head>

	<title>xCompany</title>
	<link rel="stylesheet" type="text/css" href="EditPro.css">

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

		  	<label for="email"><b>Name :</b></label>
		    <input type="text" placeholder="Enter Email" name="email" required class="rd1"><br><br>
		    <label for="email"><b>Email :</b></label>
		    <input type="text" placeholder="Enter Email" name="name" required class="rd1"><br><br>

		    <div class="gen">
		    	<label for="psw" id="g"><b>Gender  :</b></label>
			    <input type="radio" name="radio" class="rd">male
			    <input type="radio" name="radio" class="rd">female
			    <input type="radio" name="radio" class="rd">other
		    </div><br>
		    <label for="email"><b>DOB :</b></label>
		    <input type="text" placeholder="Date Of Birth" name="name" required class="rd1"><br><br>
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
