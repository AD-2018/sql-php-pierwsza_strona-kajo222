<?php
$conn = new mysqli("mysql-kako2307.alwaysdata.net","kako2307_1","QWE!@#123","kako2307_1");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (null, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

$conn->close();
?>
