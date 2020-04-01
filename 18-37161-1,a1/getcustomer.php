<?php

$mysqli = new mysqli('localhost', 'root', '', 'dbdivision');
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT diviname,disname
FROM tbl_division WHERE diviname = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($diviname, $disname);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Division Name</th>";
echo "<td>" . $diviname . "</td>";
echo "<th>District Name</th>";
echo "<td>" . $disname . "</td>";
echo "</tr>";
echo "</table>";
?>