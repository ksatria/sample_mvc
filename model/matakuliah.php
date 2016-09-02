<?php
	require_once("model/database.php");
	
	class Matakuliah{
		private $connection;
		
		public function __construct(){
			// Sesuaikan dengan pengaturan pada komputer Anda
			// Format: new Database(a,b,c,d)
			// a = nama host, b = nama user, c = password yang digunakan,
			// dan d = nama database
			$db = new Database("localhost","root","","umamawp");
			$this->connection = $db->connect();
		}
		
		public function getDaftarMatakuliah(){
			$query = "SELECT * FROM matakuliah";
			$result = mysql_query($query,$this->connection);
			
			return $result;
		}
	}
?>