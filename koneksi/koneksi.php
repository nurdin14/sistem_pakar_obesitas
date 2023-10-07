<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "diet_sehat");

	$ambil = mysqli_query($koneksi, "SELECT * FROM user");
	while ($data = mysqli_fetch_assoc($ambil)) {
		
		echo $data['nama'];
	}

?>