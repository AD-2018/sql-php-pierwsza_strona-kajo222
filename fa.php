<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
            require_once("connect.php");

                $sql = "SELECT sum(zarobki) as suma FROM pracownicy";
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like '%a'";
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like '%a' and (dzial=2 or dzial=3)";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT avg(zarobki) as srednia FROM pracownicy where dzial=4";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Średnia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['srednia'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like '%a' and (dzial=1 or dzial=2)";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 5 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Średnia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['srednia'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT count(imie) as ilu FROM pracownicy";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 6 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Ilu</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['ilu'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT count(imie) as ilu FROM pracownicy where imie like '%a' and (dzial=1 or dzial=3)";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 7 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Ilu</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['ilu'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                    
                $sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like '%a'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 8 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT dzial, sum(zarobki) as suma FROM pracownicy group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT dzial, count(imie) as suma FROM pracownicy group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT dzial, avg(zarobki) as suma FROM pracownicy group by dzial";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT sum(zarobki) as suma, if ((imie like '%a'), 'Kobiety', 'Mezczyzni') as 'grupa' FROM pracownicy group by grupa";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                         echo('<th>Grupa</th><th>Suma</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['grupa'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $sql = "SELECT avg(zarobki) as suma, if ((imie like '%a'), 'Kobiety', 'Mezczyzni') as 'grupa' FROM pracownicy group by grupa";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 5 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Grupa</th><th>Srednia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['grupa'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
                $sql = "SELECT nazwa_dzial, avg(zarobki) as suma FROM pracownicy, organizacja where id_org=dzial group by dzial having avg(zarobki)<28";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Srednia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        
        
                $sql = "SELECT nazwa_dzial, avg(zarobki) as suma FROM pracownicy, organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)>30";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Srednia</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
        
        
                $sql = "SELECT nazwa_dzial, count(imie) as suma FROM pracownicy, organizacja where id_org=dzial group by dzial having count(imie)>3";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Dzial</th><th>Ilosc</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
        
        


        ?>
    </body>
</html>
