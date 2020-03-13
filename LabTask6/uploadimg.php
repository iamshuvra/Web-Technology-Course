<?php
// Start the session
session_start();

$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["gender"] = $_POST["radio"];
$_SESSION["password"] = $_POST["pass"];


?>


<html>
   <body>
      
      <form action="reg.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit"/>
      </form>
      
   </body>
</html>