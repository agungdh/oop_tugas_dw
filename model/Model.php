<?php

require_once '../config/Database.php';

class Model
{
	public $_koneksi;
	public $_atribut;
	public $_state;
	public $_tabel;
	public $_idTabel;
	
	public function __construct()
	{
		$this->_state = 'tambah';

		$database = new Database();
		$this->_koneksi = $database->koneksi;
	}

	public function ambilSemuaData()
	{
		return mysqli_fetch_all($this->_koneksi->query("SELECT * FROM " . $this->_tabel), MYSQLI_ASSOC);
	}	

	public function _simpan()
	{
		
		if ($this->_state == 'tambah') {
			$rawColumns = [];
			foreach ($this->_atribut as $key => $value) {
				$rawColumns[] = $key;

				$this->_atribut[$key] = "'" . mysqli_real_escape_string($this->_koneksi, $value) . "'";
			}

			$values = implode(',', $this->_atribut);
			$columns = implode(',', $rawColumns);

			return $this->_koneksi->query("INSERT INTO " . $this->_tabel . " (" . $columns . ")" . " VALUES (" . $values . ")") or die(mysqli_error($this->_koneksi));
		} elseif ($this->_state == 'ubah') {
			$rawValues = [];
			foreach ($this->_atribut as $key => $value) {
				$rawValues[] =  $key . '=' . "'" . mysqli_real_escape_string($this->_koneksi, $value) . "'";
			}

			$values = implode(',', $rawValues);

			return $this->_koneksi->query("UPDATE " . $this->_tabel . " SET " . $values . " WHERE id = " . $this->_idTabel);
		}
	}	

	public function cari($id)
	{
		$data = mysqli_fetch_assoc($this->_koneksi->query("SELECT * FROM " . $this->_tabel . " WHERE id = " . $id));
		
		$this->_state = 'ubah';
		$this->_idTabel = $data['id'];

		return $data;
	}	

	public function hapus($id)
	{
		return $this->_koneksi->query("DELETE FROM " . $this->_tabel . " WHERE id = " . $id);
	}	
}