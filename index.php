<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
            require_once("connect.php");

                $sql = "SELECT * FROM pracownicy where dzial=2";
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



                $sql = "SELECT * FROM pracownicy where (dzial=2) or (dzial=3)";
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



                $sql = "SELECT * FROM pracownicy where zarobki<30";   
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
