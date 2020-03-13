


<?php

session_start();

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gen = $_SESSION["gender"];
$pass = $_SESSION["password"];
$img = $_FILES['image'] ["name"];

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

$sql = "INSERT INTO user (Name, Email, Gender, password, image)
VALUES ('$name', '$email', '$gen', '$pass', '$img')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!--

<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Registration successful</h1>
</body>
</html>
