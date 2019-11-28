<?php
require_once '../model/ProgramStudi.php';

$objProgramStudi = new ProgramStudi();
$programStudis = $objProgramStudi->ambilSemuaData();
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
			foreach ($programStudis as $programStudi) {
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