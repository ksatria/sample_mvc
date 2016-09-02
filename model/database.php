<?php
	class Database{
		private $dbhost;
		private $dbuser;
		private $dbpass;
		private $dbname;
		
		public function __construct($host,$user,$pass,$db){
			$this->dbhost = $host;
			$this->dbuser = $user;
			$this->dbpass = $pass;
			$this->dbname = $db;
		}
		
		public function connect(){
			$connect = mysql_connect($this->dbhost,$this->dbuser,$this->dbpass) or die("Koneksi ke database bermasalah");
			
			mysql_select_db($this->dbname,$connect) or ("Database tidak dikenali");
			
			return $connect;
		}
	}
?>