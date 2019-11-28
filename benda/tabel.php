<?php
require_once '../model/Benda.php';

$objMahasiswa = new Benda();
$mahasiswas = $objMahasiswa->ambilSemuaData();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Benda</title>
</head>
<body>
	<div style="text-align: center;">
		<b><a href="tabel.php">Mahasiswa</a></b>
		<a href="">Siswa</a>
		<a href="">Benda</a>
		<a href="">Program Studi</a>
	</div>
	<h2 style="text-align: center;">Benda</h2>
	<a href="tambah.php">Tambah</a>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Benda</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($mahasiswas as $benda) {
				?>
				<tr>
					<td><?php echo $benda['benda']; ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $benda['id']; ?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $benda['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>