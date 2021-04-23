<html>
  <head>
      <link rel="stylesheet" href="../style.css">
  </head>
<body>
  <?php
    require_once("../connect.php");
    echo("Delete" . "<br>");
    echo $_POST['id'];
    echo "<br>";
    $sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];
    $conn->close();
  ?>
</body>
</html>
