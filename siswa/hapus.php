<?php
require_once '../model/Siswa.php';

$siswa = new Siswa();
$siswa->cari($_GET['id']);
$siswa->hapus();

header("Location: tabel.php");