<?php
	include 'koneksi.php';

	$id = $_POST['id'];
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jrs = $_POST['jrs'];
	$matkul = $_POST['matkul'];

	mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nama='$nama', nim='$nim', jrs='$jrs', matkul='$matkul' WHERE id='$id'");

	header("location:index.php");

?>