<?php
require_once '../model/Benda.php';

$benda = new Benda();
$benda->cari($_POST['id']);
$benda->benda = $_POST['benda'];
$benda->simpan();

header("Location: tabel.php");