<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['autor'];

require_once ("../lib.php");

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_autor (id_autor, autor) 
       VALUES (null, '".$_POST['autor']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;



$conn->close();
?>