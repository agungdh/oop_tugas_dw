<?php

require_once '../model/Model.php';

class Benda Extends Model
{

	public $benda;

	public function __construct()
	{
		parent::__construct();

		$this->_tabel = 'benda';
	}

	public function simpan()
	{
		$this->_atribut['benda'] = $this->benda;
		
		return $this->_simpan();
	}

}