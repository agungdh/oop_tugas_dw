<?php
require_once '../model/Mahasiswa.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Mahasiswa</a></b>
		<a href="../siswa/tabel.php">Siswa</a>
		<a href="../benda/tabel.php">Benda</a>
		<a href="../program_studi/tabel.php">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Mahasiswa</h2>

	<form action="simpan.php" method="post">
		<label>Nama</label>
		<input type="text" name="nama" required>
		<br>

		<label>NPM</label>
		<input type="number" name="npm" required>
		<br>

		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" required>
		<br>

		<label>Alamat</label>
		<textarea name="alamat" required></textarea>
		<br>

		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>