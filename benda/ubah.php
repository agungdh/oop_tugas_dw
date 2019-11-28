<?php
require_once '../model/Benda.php';

$objBenda = new Benda();
$benda = $objBenda->cari($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Benda</title>
</head>
<body>
	<div style="text-align: center;">
		<a href="../mahasiswa/tabel.php">Mahasiswa</a>
		<a href="../siswa/tabel.php">Siswa</a>
		<b><a href="tabel.php">Benda</a></b>
		<a href="../program_studi/tabel.php">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Benda</h2>

	<form action="simpanubah.php" method="post">
		<input type="hidden" name="id" value="<?php echo $benda['id']; ?>">

		<label>Benda</label>
		<input type="text" name="benda" required value="<?php echo $benda['benda']; ?>">
		<br>
		
		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>