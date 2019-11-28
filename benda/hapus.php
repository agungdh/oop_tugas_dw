<?php
require_once '../model/Benda.php';

$benda = new Benda();
$benda->cari($_GET['id']);
$benda->hapus();

header("Location: tabel.php");