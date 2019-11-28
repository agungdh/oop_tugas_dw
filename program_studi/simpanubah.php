<?php
require_once '../model/ProgramStudi.php';

$programStudi = new ProgramStudi();
$programStudi->cari($_POST['id']);
$programStudi->program_studi = $_POST['program_studi'];
$programStudi->simpan();

header("Location: tabel.php");