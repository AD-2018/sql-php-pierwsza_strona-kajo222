<!DOCTYPE html>
<html>
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width">
		  <link rel="stylesheet" href="style.css">
		  <title>Insert</title>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<h3>DODAJ PRACOWNIKA</h3>
		<form action="insert.php" method="POST">
			<input type="text" name="imie" placeholder="imie"><br />
			<input type="number" name="dzial" placeholder="dzial"><br />
			<input type="number" name="zarobki" placeholder="zarobki"><br />
			<input type="date" name="data_urodzenia" placeholder="data urodzenia"><br />
			<input type="submit" value="dodaj pracownika">
		</form>
		<br />
		<h3>USUN PRACOWNIKA</h3>
		<form action="delete.php" method="POST">
			<input type="number" name="id" placeholder="id"><br />
			<input type="submit" value="Zapisz w zmiennej $_POST['id']">
		</form>
		<br /><br />
		<?php
require_once("connect.php");
$sql = "SELECT * FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th><th>ID</th>');

 while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.

         '<td>
         <form action="delete.php" method="POST">
          <input type="hidden" name="id" value="'.$row['id_pracownicy'].'"></br>
           <input type="submit" value="Usuń">
    </form>
         </td>');

        echo('</tr>');
    }
  echo('</table>');
?>


	</body>
</html>
