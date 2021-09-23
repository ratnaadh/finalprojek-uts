<?php

// Class database (koneksi database)
class Database
{

	// Property
	var $host = "db4free.net";
	var $uname = "muri_ramariz2";
	var $pass = "*5hSGJX8PcuJ#TE";
	var $db = "db_spp1";
	var $connection;

	// Method koneksi kedalam database
	function Connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}
