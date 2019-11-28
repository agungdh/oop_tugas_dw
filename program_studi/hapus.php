<?php
require_once '../model/ProgramStudi.php';

$programStudi = new ProgramStudi();
$programStudi->cari($_GET['id']);
$programStudi->hapus();

header("Location: tabel.php");