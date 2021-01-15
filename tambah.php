<!DOCTYPE html>
<head>
	<title>CRUD MySQLi</title>
</head>
<body>
	<style>
body{
    background-color: #0fe519;
}
</style>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><input type="text" name="jrs"></td>
		</tr>
		<tr>
			<td>Mata Kuliah</td>
			<td><input type="text" name="matkul"></td>
		</tr>
		<tr>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>