<?php

//inlcude atau memasukkan file koneksi ke database
include('koneksi.php');

$nis = 'A11.123456.79';	
$nama = 'Andre';	
$no_hp = '085123456789';	
$tmpt_lahir = 'Jakarta';	
$tgl_lahir = '1998-08-17';	
$jenis_kelamin = 'L';	
$alamat = 'Jalan Maju No 000 RT 0 RW 0 Kelurahan Maju Kecamatan Maju Kota Maju';	

$sql = "INSERT INTO siswa (nis, nama, no_hp, tmpt_lahir, tgl_lahir, jenis_kelamin, alamat) 
		VALUES('$nis', '$nama', '$no_hp', '$tmpt_lahir', '$tgl_lahir', '$jenis_kelamin', '$alamat')";

if (mysqli_query($koneksi, $sql)) {
	echo 'Data berhasil ditambahkan! ';	
} else {
	echo 'Gagal menambahkan data! ';
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}


?>

