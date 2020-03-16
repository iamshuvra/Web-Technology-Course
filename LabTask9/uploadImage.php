<?php
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
      
      <p><strong></strong></p>
      
      <ul>

        <li><a href="Dashboard.php"><u>Dashboard</u></a></li>
        <li><a href="ViewProfile.php"><u>View Profile</u></a></li>
        <li><a href="ProfileEdit.php"><u>Edit Profile</u><a/></li>
        <li><a href="uploadimage.php"><u>Change Profile Picture</u></a></li>
        <li><a href="ChangePass.php"><u>Change Password</u></a></li>
        <li><a href="login.html"><u>Logout</u></a></li>

      </ul>

    </div>

    <div class="vertical-line"></div>

    
    

    Welcome home <?php echo $_SESSION["name"]; ?>
    <div class="welcome-name">
    
    
    
  
    
    
    <?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "xCompany"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['but_upload'])){
 $UName=$_SESSION["UName"];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(name,UName) values('".$name."','$UName')";
     mysqli_query($con,$query);
   
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
   
   

  }
 
}
?>
<?php

//session_start();

$UName=$_SESSION['UName'];
$img = $_FILES['file']['name'];
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
pathinfo($filepath,PATHINFO_EXTENSION); 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xcompany";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE reg SET image='$img' WHERE UName='$UName'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
$conn->close();


?>




    
    <p><strong>Image-Upload</strong><p>
    <form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form>

    <p class="copyright">Copyright &copy; 2017<p>

  </section>
  

</body>
</html>