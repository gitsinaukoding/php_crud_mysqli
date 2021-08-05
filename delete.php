<?php

//inlcude atau memasukkan file koneksi ke database
include('koneksi.php');

$nis = 'A11.123456.79';	

$sql = "DELETE FROM siswa WHERE nis='$nis'";

//jika query DELETE berhasil
if(mysqli_query($koneksi, $sql)){
	echo 'Data siswa berhasil di hapus! ';
}else{
	echo 'Gagal menghapus data! ';
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}

?>
