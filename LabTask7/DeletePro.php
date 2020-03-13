<?php

	  include('DataCon.php');


	  $sql = "SELECT * FROM pro_info";
	  $result = $conn->query($sql);



	  while($row = $result->fetch_assoc()) {
	          echo "ID: " . $row["ID"]. " Name: " . $row["Name"]. " Quantity: " . $row["Quantity"]. " Description: "  . $row["Description"]."<br>";
	  }
	  mysqli_close($conn);
?>