<?php

include('koneksi.php');

$sql = "SELECT * FROM siswa";

$result = mysqli_query($koneksi, $sql);
if (!$result) {
	die('Error: '.mysqli_error($koneksi));
}else{
	if (mysqli_num_rows($result) > 0) {
		while($data = mysqli_fetch_assoc($result)){	

			print_r($data);
		}

	} else {
		echo 'Tidak ada data!';
	}
}


?>

