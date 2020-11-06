<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><button class="button" onclick="window.location.href='https://github.com/AD-2018/sql-php-pierwsza_strona-kajo222'">Github - Kacper Korczak</button></h1>

            <?php
            require_once("connect.php");

                echo("<h3>tabelka</h3>");
                    echo('<table border="1" class="tabela"');
                    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
                        while($wiersz=mysqli_fetch_assoc($wynik)){ 
//                             echo("<tr>");
//                             echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");     
//                             echo("</tr>");
                        } 
                    echo('</table>');
                

        
            $sql ="SELECT  * FROM pracownicy WHERE dzial=2";
            echo("<h3>Zadanie 1</h3>");
            $wynik = mysqli_query($conn, $sql);

                echo('<table border="1" class="tabela"');
                    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){
                            echo("<tr>");
                            echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
                            echo("</tr>");
                        } 
                echo('</table>');
        
        
                     
            $sql ="SELECT  * FROM pracownicy WHERE dzial=2 and dzial=3"; 
            echo("<h3>Zadanie 2</h3>");
            $wynik = mysqli_query($conn, $sql);
                echo('<table border="1" class="tabela"'); 
                    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){  
                            echo("<tr>"); 
                            echo("<td>1</td>";
                      //      echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
                            echo("</tr>");
                        }
                echo('</table>'); 
        
        
        
            $sql ="SELECT  * FROM pracownicy WHERE zarobki<30"; 
            echo("<h3>Zadanie 3</h3>");
            $wynik = mysqli_query($conn, $sql);
                echo('<table border="1" class="tabela"'); 
                    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
                        while($wiersz=mysqli_fetch_assoc($wynik)){  
                            echo("<tr>");     
                            echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
                            echo("</tr>");
                        }
                echo('</table>'); 
   

            ?>
    </body>
</html>
