<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Kacper Korczak 3Ti</title>
  </head>
  <body>
    <?php    
      include ("menu.php");
      echo ('<div class="zawartosc">');
      $hostname = $_SERVER['HTTP_HOST'];
      echo("<li> hostname: ".$hostname."</li>");
      require_once("connect.php");
          $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";
          $result = mysqli_query($conn, $sql);
          if ( $result) {
               echo "<br>";
           } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
            echo("<h1>Tabelka</h1>");
            echo("<table border='1'>");
            echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

          $sql = "SELECT * FROM pracownicy";
          $result = mysqli_query($conn, $sql);
          if ( $result) {
               echo "<br>";
           } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
            echo("<h1>Tabelka Pracownicy</h1>"); 
            echo("<table border='1'>");
            echo("<th>Imie</th><th>Zarobki</th><th>Dzial</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['dzial']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

          echo("<h2>Czas</h2>");
          echo (date("Y-m-d h:i:sa"));
        echo("</div>");
    ?>
  </body>
</html>
