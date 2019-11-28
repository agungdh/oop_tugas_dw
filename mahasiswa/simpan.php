<?php
require_once '../model/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = $_POST['nama'];
$mahasiswa->npm = $_POST['npm'];
$mahasiswa->tanggal_lahir = $_POST['tanggal_lahir'];
$mahasiswa->alamat = $_POST['alamat'];
$mahasiswa->simpan();

header("Location: tabel.php");