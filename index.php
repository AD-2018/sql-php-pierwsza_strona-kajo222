<?php

$conn = new mysqli("sql7.freemysqlhosting.net","sql7373393","jbaItm9QJv","sql7373393");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);

    
    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


?>