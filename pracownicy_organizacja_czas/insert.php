<html>
  <head>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <?php
      require_once("../connect.php");

      $sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki,data_urodzenia) 
            VALUES (null,".'"'.$_POST['imie'].'"'.','.$_POST['dzial'].','.$_POST['zarobki'].','.'"'.$_POST['data_urodzenia'].'"'.')';

      $conn->close();
    ?>
  </body>
</html>
