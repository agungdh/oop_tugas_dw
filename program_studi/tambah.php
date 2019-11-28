<?php
require_once '../model/ProgramStudi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Program Studi</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Program Studi</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Program Studi</h2>

	<form action="simpan.php" method="post">
		<label>Program Studi</label>
		<input type="text" name="program_studi" required>
		<br>

		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>