<?php
require_once '../model/Benda.php';

$objBenda = new Benda();
$bendas = $objBenda->ambilSemuaData();
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
			foreach ($bendas as $benda) {
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