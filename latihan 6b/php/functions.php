<?php
		function koneksi(){
			$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke db gagal");
				mysqli_select_db($conn, "pw_163040019") or die ("database salah");
				return $conn;
		}


		

		function query($sql){
			$conn = koneksi();
			$results = mysqli_query($conn, "$sql");

			$rows = [];
			while ($row = mysqli_fetch_assoc($results)){
				$rows[] = $row;
			};

			return $rows;
		}


?>