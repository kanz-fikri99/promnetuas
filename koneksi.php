<?php
	$koneksi = mysqli_connect("localhost", "root", "", "s1_kemahasiswaan");

//Check Connection
if(mysqli_connect_errno()){
	echo "Koneksi Database Gagal : " + mysqli_connect_error();

}

?>