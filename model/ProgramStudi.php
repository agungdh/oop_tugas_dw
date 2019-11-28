<?php

require_once '../model/Model.php';

class ProgramStudi Extends Model
{

	public $program_studi;

	public function __construct()
	{
		parent::__construct();

		$this->_tabel = 'program_studi';
	}

	public function simpan()
	{
		$this->_atribut['program_studi'] = $this->program_studi;
		
		return $this->_simpan();
	}

}