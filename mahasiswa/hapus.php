<?php
require_once '../model/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->cari($_GET['id']);
$mahasiswa->hapus();

header("Location: tabel.php");