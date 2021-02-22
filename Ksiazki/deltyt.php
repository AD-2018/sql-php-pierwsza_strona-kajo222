<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];


require_once ("../lib.php");

//definiujemy zapytanie $sql
$sql = "DELETE FROM bibl_tytul WHERE id_tytul=".$_POST['id'];

//wyświetlamy zapytanie $sql
echo $sql;

$conn->close();
?>