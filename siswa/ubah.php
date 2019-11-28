<?php
require_once '../model/Siswa.php';

$objectMahasiswa = new Siswa();
$siswa = $objectMahasiswa->cari($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Mahasiswa</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Siswa</h2>

	<form action="simpanubah.php" method="post">
		<input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">

		<label>Nama</label>
		<input type="text" name="nama" required value="<?php echo $siswa['nama']; ?>">
		<br>

		<label>NIS</label>
		<input type="number" name="nis" required value="<?php echo $siswa['nis']; ?>">
		<br>

		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>