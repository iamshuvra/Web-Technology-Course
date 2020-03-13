<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $sql = "SELECT * FROM pro_info";

echo '<table border="2" cellspacing="5" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Description</font> </td> 
          <td> <font face="Arial">Quantity</font> </td> 
      </tr>';
 
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["Name"];
        $field3name = $row["Description"];
        $field4name = $row["Quantity"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td><a href="AddPro.php">Edit</a></td>
                  <td><a href="DeletePro.php">Delete</a></td>
              </tr>';
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Add Product</h1>
<form action="AddPro.php" method="post">
	<label>Name</label>
	<input type="text" name="name"><br><br>
	<label>Description</label>
	<textarea name="desc"></textarea>
	<label>Quantity</label>
	<input type="text" name="quantity"><br><br>
	<input type="submit" name="AddPro"><br>
	<input type="submit" name="Delete"><br>
	<input type="submit" name="Edit"><br>
</form>
</body>
</html>