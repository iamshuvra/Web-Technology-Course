
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {     
      $gender = $_POST["gender"];
      $_SESSION["gender"] = $gender;
      header('location:SecondProcessor.php');
}
?>

<h2>Enter your Information.</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter Gender: <br>
    <input type="radio" name=gender value="Male" checked>Male
    <input type="radio" name=gender value="Female">Female 
    <input type="radio" name=gender value="Other">Other
    <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>                                        