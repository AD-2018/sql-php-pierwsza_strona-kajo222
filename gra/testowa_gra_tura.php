<html>
  <head>
      <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <?php
      require_once("../connect.php");

      $sql = "UPDATE gra_nr_1 SET ".$_POST['Kolumna'].'= if (tura="X" , if('.$_POST['Kolumna'].'="O","O","X"),if('.$_POST['Kolumna'].'="O","X","O")) WHERE X = '.'"'.$_POST['Wiersz'].'"';

      if ($conn->query($sql) === TRUE) {
        echo("</br>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
          
      $sql = "UPDATE gra_nr_1 SET tura= if (tura='X' , 'O','X') WHERE X = 'Wiersz 1' or X = 'Wiersz 2' or X = 'Wiersz 3'";

      if ($conn->query($sql) === TRUE) {
        header('Location: https://bulka-ukululu.herokuapp.com/gra/testowa_gra.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    ?>
  </body>
</html>
