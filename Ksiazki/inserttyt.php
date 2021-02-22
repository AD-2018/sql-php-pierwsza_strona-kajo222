<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['tytul'];

require_once ("../lib.php");

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_tytul (id_tytul, tytul) 
       VALUES (null, '".$_POST['tytul']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

$conn->close();
?>