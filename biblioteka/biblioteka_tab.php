<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php
        require_once("../connect.php");

        $sql = "INSERT INTO biblAutor_biblTytul (id,biblAutor_id,biblTytul_id,biblWypoz) 
              VALUES (null,".'"'.$_POST['autor'].'"'.','.'"'.$_POST['tytul'].'"'.','.'0'.')';


        if ($conn->query($sql) === TRUE) {
          header('Location: https://bulka-ukululu.herokuapp.com/biblioteka/biblioteka.php');
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </body>
</html>
