<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from s1_kemahasiswaan where id='$id'");
		
	header("location:admin/index.php");
?>