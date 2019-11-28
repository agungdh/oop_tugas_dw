<?php
require_once '../model/Mahasiswa.php';

$objMahasiswa = new Mahasiswa();
$mahasiswas = $objMahasiswa->ambilSemuaData();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Mahasiswa</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Mahasiswa</h2>
	<a href="tambah.php">Tambah</a>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NPM</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($mahasiswas as $mahasiswa) {
				?>
				<tr>
					<td><?php echo $mahasiswa['nama']; ?></td>
					<td><?php echo $mahasiswa['npm']; ?></td>
					<td><?php echo date("d-m-Y", strtotime($mahasiswa['tanggal_lahir'])); ?></td>
					<td><?php echo $mahasiswa['alamat']; ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $mahasiswa['id']; ?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $mahasiswa['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>