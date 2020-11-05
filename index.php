<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-kajo222">github</a>
        <h1>Kacper Korczak</h1>

            <?php

            include 'connect.php';
                echo('<table border="1">');
                    echo('<th>Imie</th><th>zarobki</th>');
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo('<tr>');
                            echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
                            echo('</tr>');
                        }
                echo('</table>');
            ?>
     </body>
</html>


           
