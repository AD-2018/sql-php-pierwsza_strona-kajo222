<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../style.css">
        <title>Kacper Korczak 3Ti</title>
    </head>
    <body>
        <?php include ("../menu.php"); ?>
        <div class="zawartosc">
        <?php
        require_once("../connect.php");
        echo ('<div class="do_lewej">');
        echo ('</div>');
        echo ('<div class="Dane6">');
        echo ('<div class="do_lewej">');
        echo ('<div class="Dane4">');
        echo ('<h3 class="zielone">Dodawanie Książki</h3>');
        echo ('<form action="biblioteka_ksiazka.php" method="POST">');
        echo ('<div>Tytuł Książki: <input type="text" name="tytul"></div>');
        echo ('</br><br><br>');
        echo ('<div><input type="submit" class="button_bibl" value="Dodaj Książkę"></div>');
        echo ('</form>');
        echo ('</div>');
        echo ('</div>');
        echo ('<div class="do_lewej">');
        echo ('<div class="Dane4">');
        echo ('<h3 class="zielone">Dodawanie Autora</h3>');
        echo ('<form action="biblioteka_autor.php" method="POST">');
        echo ('<div>Autor: <input type="text" name="autor"></div>');
        echo ('</br><br><br>');
        echo ('<div><input type="submit" class="button_bibl" value="Dodaj Autora"></div>');
        echo ('</form>');
        echo ('</div>');
        echo ('</div>');
        echo ('<div class="do_lewej">');
        echo ('<div class="Dane4">');
        $sql ="select * from biblTytul";
        $result = mysqli_query($conn, $sql);
        if ( $result) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            };
        echo ('<h3 class="zielone">Dodawanie Do Tabelki</h3>');
        echo ('<form action="biblioteka_tab.php" method="POST">');
        echo ('<div>Tytuł Książki: <select name="tytul">');
          while($row = mysqli_fetch_assoc($result)) {
                    echo ('<option value="'.$row['id'].'">');
              echo ($row['tytul']);
              echo ("</option>");
          };
        echo ('</select>');
        echo ('</div>');
        echo ('</br>');
        $sql ="select * from biblAutor";
        $result = mysqli_query($conn, $sql);
        if ( $result) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            };
        echo ('<div>Autor: <select name="autor" class="do_prawej">');
          while($row = mysqli_fetch_assoc($result)) {
                    echo ('<option value="'.$row['autor'].'">');
              echo ($row['autor']);
              echo ("</option>");
          };
        echo ('</select>');
        echo ('</div>');
        echo ('</br>');
        echo ('<div><input type="submit" class="button_bibl" value="Dodaj Do Tabelki"></div>');
        echo ('</form>');
        echo ('</div>');
        echo ('</div>');


        echo ('<div class="do_lewej">');
        echo ('<div class="Dane4">');
        echo ('<h3 class="zielone">Wypożyczenie Książki</h3>');
        echo ('<form action="biblioteka.php" method="POST">');

        echo ('<div>Autor: <select name="autor" class="do_prawej">');
        $sql ="select * from biblAutor";
        $result = mysqli_query($conn, $sql);
        if ( $result) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            };
          while($row = mysqli_fetch_assoc($result)) {
                    echo ('<option value="'.$row['autor'].'">');
              echo ($row['autor']);
              echo ("</option>");
          };
        echo ('</select>');
        echo ('</div>');
        echo ('<div>Wybrany Autor: <div class="do_prawej">'.$_POST[autor].'</div></div>');
        echo ('</br>');
        echo ('<div><input type="submit" class="button_bibl" value="Pokaż Książki"></div>');
        echo ('</form>');
        echo ('</br>');

        echo ('<form action="biblioteka_tab2.php" method="POST">');

        echo ('<div>Tytuł Książki: <select name="tytul">');
        $sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, (`biblAutor`.id) as ID_AUTOR, (`biblTytul`.id) as ID_TYTUL, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id and biblAutor.autor=".'"'.$_POST['autor'].'"';
        $result = mysqli_query($conn, $sql);
        if ( $result) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            };
          while($row = mysqli_fetch_assoc($result)) {
                    echo ('<option value="'.$row['ID_TYTUL'].'">');
              echo ($row['tytul']);
              echo ("</option>");
          };
        echo ('</select>');
        echo ('</div>');
        echo ('<div><input name="autor" value="'.$_POST['autor'].'" hidden></div>');
        echo ('</br>');

        echo ('<div><input type="submit" class="button_bibl" value="Wypożycz Książkę"></div>');
        echo ('</form>');
        echo ('</div>');
        echo ('</div>');


        echo ('<div class="do_lewej">');
        echo ('<div class="Dane4">');
        echo ('<h3 class="zielone">Wypożyczenie Książki po ID</h3>');
        echo ('<form action="biblioteka_tab3.php" method="POST">');
        echo ('<div>ID: <input type="number" name="id" class="do_prawej"></div>');
        echo ('<br><br><br>');
        echo ('<div><input type="submit" class="button_bibl" value="Wypożycz Książkę"></div>');
        echo ('</form>');
        echo ('</div>');
        echo ('</div>');
        echo ('<div>');
        echo ('</div>');
        echo ('<div class="Dane5">');
        $sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
            $result = mysqli_query($conn, $sql);
            if ( $result) {
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            echo("<table border='1' class='tab_bibl'>");
            echo("<th>ID</th><th>Autor</th><th>Tytuł</th><th>Wypożyczona</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['ID_TAB']."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td><td>");
              if ( $row['biblWypoz'] == "0") {
                echo("NIE</td>");
              } else {
                echo("TAK</td>");
              };
                    echo("</tr>");
                };
            echo("</table>");
        echo ('</div>');
        ?>
    </div>
    </body>
</html>
