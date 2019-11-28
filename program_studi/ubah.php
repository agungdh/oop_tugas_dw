<?php
require_once '../model/ProgramStudi.php';

$objectProgramStudi = new ProgramStudi();
$programStudi = $objectProgramStudi->cari($_GET['id']);
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

	<form action="simpanubah.php" method="post">
		<input type="hidden" name="id" value="<?php echo $programStudi['id']; ?>">

		<label>Program Studi</label>
		<input type="text" name="program_studi" required value="<?php echo $programStudi['program_studi']; ?>">
		<br>

		<input type="submit" value="Simpan">
		<a href="tabel.php"><button type="button">Kembali</button></a>
	</form>
</body>
</html>