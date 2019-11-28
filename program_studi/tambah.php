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
		<a href="../mahasiswa/tabel.php">Mahasiswa</a>
		<a href="../siswa/tabel.php">Siswa</a>
		<a href="../benda/tabel.php">Benda</a>
		<b><a href="tabel.php">Program Studi</a></b>
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