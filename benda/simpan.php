<?php
require_once '../model/Benda.php';

$benda = new Benda();
$benda->benda = $_POST['benda'];
$benda->simpan();

header("Location: tabel.php");