<?php
$conn = new mysqli($_SERVER["servername"],$_SERVER["user"],$_SERVER["pass"],$_SERVER["dbname"]);
$sql = "SELECT * FROM pracownicy";


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
