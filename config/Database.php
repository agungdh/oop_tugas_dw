<?php

class Database
{
	private $konfigurasi = [];
	public $koneksi;

	public function __construct()
	{
		$this->konfigurasi['url'] = 'localhost';
		$this->konfigurasi['username'] = 'root';
		$this->konfigurasi['password'] = '';
		$this->konfigurasi['database'] = 'oop';

		$this->koneksi = mysqli_connect(
			$this->konfigurasi['url'],
			$this->konfigurasi['username'],
			$this->konfigurasi['password'],
			$this->konfigurasi['database']
		);

		if (mysqli_connect_errno()){
			die(mysqli_connect_error());
		}
	}	
}