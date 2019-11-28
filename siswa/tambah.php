<?php
require_once '../model/Siswa.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Siswa</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Siswa</h2>

	<form action="simpan.php" method="post">
		<label>Nama</label>
		<input type="text" name="nama" required>
		<br>

		<label>NIS</label>
		<input type="number" name="nis" required>
		<br>

		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>