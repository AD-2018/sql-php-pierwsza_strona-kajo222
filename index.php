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
                    echo('<table border="1" class="tabela"');echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
                        while($wiersz=mysqli_fetch_assoc($wynik)){ 
                            echo("<tr>");
                            echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");     
                            echo("</tr>");
                        } 
                    echo('</table>');
                

        
            $sql ="select imie,zarobki from pracownicy where imie not like '%a' having zarobki<40";
            echo("<h3>zadanie 1</h3>");
            $wynik = mysqli_query($conn, $sql);

                echo('<table border="1" class="tabela"');
                    echo ("<th>imie</th><th>zarobki</th>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo("<tr>");
                            echo("<td>".$wiersz['imie']."</td><td>".$wiersz['zarobki']."</td>");
                            echo("</tr>");
                        } 
                echo('</table>');
        
        
        
            $sql ="select nazwa_dzial from pracownicy,organizacja where id_org=dzial and (dzial=2 or dzial=3) group by dzial";
            echo("<h3>zadanie 2</h3>");
            $wynik = mysqli_query($conn, $sql);  
                echo('<table border="1" class="tabela"');
                    echo ("<th>nazwa_dzial</th>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo("<tr>");
                            echo("<td>".$wiersz['nazwa_dzial']."</td>");
                            echo("</tr>");
                        } 
                    echo('</table>'); 
                     
        
        
            $sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)<35"; 
            echo("<h3>zadanie 3</h3>"); 
            $wynik = mysqli_query($conn, $sql);
                echo('<table border="1" class="tabela"'); 
                    echo ("<th>avg(zarobki)</th><th>nazwa_dzial</th>"); 
                        while($wiersz=mysqli_fetch_assoc($wynik)){  
                            echo("<tr>");     
                            echo("<td>".$wiersz['avg(zarobki)']."</td><td>".$wiersz['nazwa_dzial']."</td>");     
                            echo("</tr>");
                        }
                echo('</table>'); 
        
        
        
            $sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial having avg(zarobki)<40"; 
            echo("<h3>zadanie 4</h3>"); 
            $wynik = mysqli_query($conn, $sql);  
                echo('<table border="1" class="tabela"'); 
                    echo ("<th>avg(zarobki)</th><th>nazwa_dzial</th>"); 
                        while($wiersz=mysqli_fetch_assoc($wynik)){ 
                            echo("<tr>");     
                            echo("<td>".$wiersz['avg(zarobki)']."</td><td>".$wiersz['nazwa_dzial']."</td>");
                            echo("</tr>");
                        }
                echo('</table>');
        

            ?>
    </body>
</html>
