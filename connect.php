<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($hostname=="localhost"){
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'a'; 
} else {
$servername = "mysql-kako2307.alwaysdata.net";
$username = "kako2307_1";
$password = "QWE!@#123";
$dbname = "kako2307_1"; 
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
