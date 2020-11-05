<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <button onclick="window.location.href='https://github.com/AD-2018/sql-php-pierwsza_strona-kajo222'">Github</button>
        <h1>Kacper Korczak</h1>

            <?php
            require_once("connect.php");

                echo("<h3>tabelka</h3>");
                echo('<table border="1" class="tabela"');
                    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo("<tr>");   
                            echo("<tr>");
                            echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");     
                            echo("<tr>");
                            echo("</tr>");
                        } 
                    echo('</table>');
            
        
        
            $sql ="select nazwa_dzial from pracownicy,organizacja where id_org=dzial and (dzial=2 or dzial=3) group by dzial";
            echo("<h3>zadanie1</h3>");
            $wynik = mysqli_query($conn, $sql);  

                echo('<table border="1" class="tabela"');
                    echo ("<tr><th>nazwa_dzial</th></tr>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo("<tr>");
                            echo("<tr>");
                            echo("<td>".$wiersz['nazwa_dzial']."</td>");
                            echo("<tr>");
                            echo("</tr>");
                        } 
                    echo('</table>'); 
       
                echo('</table>'); 
        
            ?>
    </body>
</html>
