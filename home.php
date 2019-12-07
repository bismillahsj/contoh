<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi</title>
</head>
<body>
	<h1>SELAMAT DATANG DI APLIKASI KU</h1>










	<form method="POST">
		<input type="submit" name="keluar" value="KELUAR">
	</form>
</body>
</html>

<?php 
	
	if (isset($_POST['keluar'])) {
		header("location:index.php");
	}

 ?>