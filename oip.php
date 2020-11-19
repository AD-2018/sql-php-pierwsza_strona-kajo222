<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
            require_once("connect.php");

                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');



                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial order by imie desc";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and dzial=3 order by imie asc";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a' order by imie asc";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=1 or dzial=3) order by imie asc";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 4 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 5 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 2";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 1 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=4 or dzial=2) order by zarobki desc limit 3";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 2 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    
                    
                $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial order by data_urodzenia asc limit 1";   
                $result = mysqli_query($conn, $sql);
                echo("Zad 3 - ".$sql);
                    echo('<table border="1">');
                        echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<tr>');
                                echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
                                echo('</tr>');
                            }
                    echo('</table>');
                    
                    

        ?>
    </body>
</html>
