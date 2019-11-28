<?php
require_once '../model/ProgramStudi.php';

$objMahasiswa = new ProgramStudi();
$mahasiswas = $objMahasiswa->ambilSemuaData();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Program Studi</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">programStudi</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Program Studi</h2>
	<a href="tambah.php">Tambah</a>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Program Studi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($mahasiswas as $programStudi) {
				?>
				<tr>
					<td><?php echo $programStudi['program_studi']; ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $programStudi['id']; ?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $programStudi['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>