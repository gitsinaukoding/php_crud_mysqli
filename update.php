<?php

include('koneksi.php');

$nis = 'A11.123456.78';	
$nama = 'Andre Andre';	
$no_hp = '085123456789';	
$tmpt_lahir = 'Jakartaaaaa';	
$tgl_lahir = '1998-08-17';	
$jenis_kelamin = 'L';	
$alamat = 'Jalan Maju No 000 RT 0 RW 0 Kelurahan Maju Kecamatan Maju Kota Maju';

$sql = "UPDATE siswa SET nama='$nama', no_hp='$no_hp', tmpt_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nis='$nis'";

if (mysqli_query($koneksi, $sql)) {
	echo 'Data berhasil diedit! ';	
} else {
	echo 'Gagal mengedit data! ';
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}

?>
