<!DOCTYPE html>
<html>
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width">
		  <title>Dane do Bazy</title>
	</head>
	<body>
		<h3>DODAJ PRACOWNIKA</h3>
		<form action="insert.php" method="POST">
			<input type="text" name="imie">
			<input type="number" name="dzial"></br>
			<input type="number" name="zarobki"></br>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="dodaj pracownika">
		</form>
		<br />
		<h3>USUN PRACOWNIKA</h3>
		<form action="delete.php" method="POST">
			<input type="number" name="id"></br>
			<input type="submit" value="Zapisz w zmiennej $_POST['id']">
		</form>

	</body>
</html>
