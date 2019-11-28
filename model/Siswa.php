<?php

require_once '../model/Model.php';

class Siswa Extends Model
{

	public $nama;
	public $nis;

	public function __construct()
	{
		parent::__construct();

		$this->_tabel = 'siswa';
	}

	public function simpan()
	{
		$this->_atribut['nama'] = $this->nama;
		$this->_atribut['nis'] = $this->nis;

		return $this->_simpan();
	}

}