<?php
require_once '../model/Siswa.php';

$objSiswa = new Siswa();
$siswas = $objSiswa->ambilSemuaData();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<div style="text-align: center;">
		<a href="../mahasiswa/tabel.php">Mahasiswa</a>
		<b><a href="tabel.php">Siswa</a></b>
		<a href="../benda/tabel.php">Benda</a>
		<a href="../program_studi/tabel.php">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Siswa</h2>
	<a href="tambah.php">Tambah</a>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIS</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($siswas as $siswa) {
				?>
				<tr>
					<td><?php echo $siswa['nama']; ?></td>
					<td><?php echo $siswa['nis']; ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $siswa['id']; ?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $siswa['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>