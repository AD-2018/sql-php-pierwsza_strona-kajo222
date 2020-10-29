<?php

$conn = new mysqli("sql7.freemysqlhosting.net","sql7373393","jbaItm9QJv","sql7373393");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo($wiersz['imie']);
    }


?>
