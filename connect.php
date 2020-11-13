<?php
$conn = new mysqli("mysql-kako2307.alwaysdata.net","kako2307_1","QWE!@#123","kako2307_1");
$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
