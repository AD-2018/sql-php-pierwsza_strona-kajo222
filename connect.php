<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($hostname=="localhost"){
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'a'; 
} else {
$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
