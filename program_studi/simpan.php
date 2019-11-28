<?php
require_once '../model/ProgramStudi.php';

$programStudi = new ProgramStudi();
$programStudi->program_studi = $_POST['program_studi'];
$programStudi->simpan();

header("Location: tabel.php");