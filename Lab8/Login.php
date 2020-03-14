<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
<section class="sec-index">
  
    <img src="Capture.PNG" alt="xCompany" class="logo-img">

    <div class="right-float">

      <p><a href="index.php"><u>Home</u></a> | <a href="login.php"><u>Login</u></a> | <a href="Reg.php"><u>Registration</u></a>

    </div>

  </section>
<hr>


<fieldset>
  <legend>Login</legend>
  <form action="login_dashboard.php">
  <div class="container">

    <label for="email"><b>Email :</b></label>
    <input type="text" placeholder="Enter Email" name="email" required class="rd1"><br><br>

    <label for="psw"><b>Password  :</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required class="rd1"><br><br>
    <hr>
    <input type="checkbox" placeholder="Enter Password" name="psw" required>Remember Me<br><br>
    <div class="registerbtn">
      <input type="submit" name="submit" >
      <a href="forgot_password.php"><p class="copyright">Forgot Password?<p></a>
  </div>
  </div>

</form>
</fieldset>


<p class="copyright">Copyright &copy; 2017<p>
</body>
</html>