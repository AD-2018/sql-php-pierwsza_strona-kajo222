<?php
$conn = new mysqli("mysql-kako2307.alwaysdata.net","kako2307_1","QWE!@#123","kako2307_1");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, $_POST['imie'], 1, 76,'1991-11-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
