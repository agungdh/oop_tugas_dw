<?php

require 'Model.php';

class Mahasiswa Extends Model
{

	public $nama;
	public $npm;
	public $tanggal_lahir;
	public $alamat;

	public function __construct()
	{
		parent::__construct();

		$this->_tabel = 'mahasiswa';
	}

	public function simpan()
	{
		$this->_atribut['nama'] = $this->nama;
		$this->_atribut['npm'] = $this->npm;
		$this->_atribut['tanggal_lahir'] = $this->tanggal_lahir;
		$this->_atribut['alamat'] = $this->alamat;

		return $this->_simpan();
	}

}

$a = new Mahasiswa();
// $a->cari(1);
$a->nama = "Agun'\nssgDH";
$a->npm = '15753003';
$a->tanggal_lahir = '1997-03-25';
$a->alamat = 'Nungga"lrejo';
var_dump($a->simpan());