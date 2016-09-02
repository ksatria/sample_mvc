<?php
	class Siakad{
		public function daftarMatakuliah(){
			include("model/matakuliah.php");
			
			$mk = new Matakuliah();
			$daftarMk = $mk->getDaftarMatakuliah();
			
			include("view/daftar_matakuliah.php");
		}
	}
?>