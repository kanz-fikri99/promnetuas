<?php
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jrs = $_POST['jrs'];
	$matkul = $_POST['matkul'];
	// $data =  array($nama, $nim, $jur, $asal );
	// var_dump($data);
	// die();

	mysqli_query($koneksi, "INSERT INTO s1_kemahasiswaan(nama, nim, jrs, matkul)VALUES('$nama','$nim','$jrs','$matkul')");
	header("location:index.html");

?>