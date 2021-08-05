<?php

//iclude file koneksi ke database
include('koneksi.php');

$sql = "SELECT * FROM siswa";

$result = mysqli_query($koneksi, $sql);
if (!$result) { //gagal request data
	die('Error: '.mysqli_error($koneksi));
}else{
	if (mysqli_num_rows($result) > 0) {
		while($data = mysqli_fetch_assoc($result)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database

			print_r($data);
		}

	} else {
		//jika data kosong, maka akan menampilkan row kosong
		echo 'Tidak ada data!';
	}
}


?>

