<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h1><table class="nav"><tr><td><button class="button" onclick="window.location.href='https://github.com/AD-2018/sql-php-pierwsza_strona-kajo222'">Github - Kacper Korczak</button></td><td><a href="index.php">Strona Główna</a></td><td><a href="oip.php">Pracownicy i Organizacja </a></td><td><a href="fa.php">Funkcje agregujące </a></td><td><a href="dt.php">Data i Czas </a></td></tr></table></h1>
        <?php
            require_once("connect.php");

                $sql = "select imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial";
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "select imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial and nazwa_dzial='serwis'";
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and nazwa_dzial='handel'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and imie like '%a'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 5 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and imie not like '%a'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 6 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select avg(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 7 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Wiek</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                    
                $sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 8 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Wiek</th><th>Dzial</th>')
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select max(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial, imie from pracownicy, organizacja where id_org=dzial group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 9 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select min(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial, imie from pracownicy, organizacja where (id_org=dzial) and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 10 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "select imie,DATEDIFF(CURDATE(),data_urodzenia) AS dni, nazwa_dzial, imie from pracownicy, organizacja where id_org=dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 11 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Wiek w dniach</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['dni'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and (imie not like '%a') order by data_urodzenia asc limit 1";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 12 - ".$sql);
                    echo('<table border="1">');
                         echo('<th>Imie</th><th>Wiek</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
                $sql = "SELECT imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and (imie not like '%a') order by data_urodzenia asc limit 1";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                         echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    $sql1 = "SET lc_time_names = 'pl_PL'";
                    $sql2 ="SELECT DATE_FORMAT(CURDATE(), '%W')as data";
                    echo ("<li>".$sql."</li><br><br>");
                    $result = mysqli_query($conn, $sql1);
                    $result = mysqli_query($conn, $sql2);
                    echo ('<table border = "1" class = "moja_tabelka">');
                        echo ("<tr><th>data</th></tr>");
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo ('<tr>');
                                echo ('<td>'.$row["data"].'</td>');
                                echo ('</tr>');
                            }
                    echo ('</table>');
        
        
                $sql = "select imie, date_format(data_urodzenia, '%W-%M-%Y') as data,  nazwa_dzial from pracownicy, organizacja where id_org=dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $sql = "SELECT curtime(4) as data";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Data</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['data'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
        
        
                $sql = "select imie, date_format(data_urodzenia, '%Y-%M-%W') as data,  nazwa_dzial from pracownicy, organizacja where id_org=dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 5 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $sql = "SELECT imie, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 6 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>Dzial</th><th>Godziny</th><th>Minuty</th><th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['godziny'].'</td><td>'.$row['minuty'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
        
                $sql = 'SELECT DATE_FORMAT("2002-05-16", "%j") as urodz';   
                $result = mysqli_query($conn, $sql);
                echo("Zad 7 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Data</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['urodz'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
                $sql = "select imie, DATE_FORMAT(data_urodzenia,'%W') as dzien,  nazwa_dzial from pracownicy, organizacja where id_org=dzial ORDER BY 
                     CASE
                          WHEN dzien = 'Poniedziałek' THEN 1
                          WHEN dzien = 'Wtorek' THEN 2
                          WHEN dzien = 'Środa' THEN 3
                          WHEN dzien= 'Czwartek' THEN 4
                          WHEN dzien = 'Piątek' THEN 5
                          WHEN dzien = 'Sobota' THEN 6
                          WHEN dzien = 'Niedziela' THEN 7
                     END ASC";
                $result = mysqli_query($conn, $sql);
                echo("Zad 8 - ".$sql);

                echo('<table border="1">');
                    echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');
                        while($row=mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['dzien'].'</td>');
                            echo('</tr>');
                        }
                echo('</table>');
        
        
                $sql = "select Count(DATE_FORMAT(data_urodzenia, '%W')) as data from pracownicy, organizacja where id_org=dzial and (DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek')";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 9 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Ilosc</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['data'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, count(date_format(data_urodzenia, '%W')) as Liczba FROM pracownicy GROUP BY dzien ORDER BY CASE
                          WHEN dzien = 'Poniedziałek' THEN 1
                          WHEN dzien = 'Wtorek' THEN 2
                          WHEN dzien = 'Środa' THEN 3
                          WHEN dzien = 'Czwartek' THEN 4
                          WHEN dzien = 'Piątek' THEN 5
                          WHEN dzien = 'Sobota' THEN 6
                          WHEN dzien = 'Niedziela' THEN 7
                          END ASC";
                $result = mysqli_query($conn, $sql);
                echo("Zad 10 - ".$sql);
                echo('<table border="1">');
                    echo('<th>Dzień</th><th>Liczba</th>');
                        while($row=mysqli_fetch_assoc($result)){
                            echo('<tr>');
                            echo('<td>'.$row['dzien'].'</td><td>'.$row['Liczba'].'</td>');
                            echo('</tr>');
                        }
                echo('</table>');
        


        ?>
    </body>
</html>
