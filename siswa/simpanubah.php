<?php
require_once '../model/Siswa.php';

$siswa = new Siswa();
$siswa->cari($_POST['id']);
$siswa->nama = $_POST['nama'];
$siswa->nis = $_POST['nis'];
$siswa->simpan();

header("Location: tabel.php");