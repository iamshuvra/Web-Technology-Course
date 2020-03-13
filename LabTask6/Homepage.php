<?php
// Start the session
//session_start();
$image = $_SESSION["image"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gender = $_SESSION["gender"];
$image_src = "upload/".$image;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome is Homepage</h1>
<label>Name : </label> <?php echo $name; ?>
<br>
<label>Email : </label> <?php echo $email; ?>
<br>
<label>Gender : </label> <?php echo $gender; ?>
<br>
<img src='<?php echo $image_src;  ?>' >
<br>
<a href="add.php">Add_Product</a>
<br>
<a href="view.php">View_Product</a>
<br>
<a href="delete.php">Delete_Product</a>
<br>
</body>
</html>