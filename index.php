
<!DOCTYPE html>
<head>
	<title>CRUD MySQLi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav id="menu">
     <ul>
        <div id="heading">
            <a href="#">Pemrograman Internet</a></li>
        </div>
        <li><a href="../admin/logout.html">Logout</a></li>
        <li><a href="index.php">Data</a></li>
        <li><a href="../index.html">Home</a></li>
    </ul>
	</nav>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h3><center>DATA MAHASISWA</h3></center>
			</br>
			 <center>
  <a href="tambah.php"> Tambah Data</a>
</center>
				</br>
				<table>
					<thead>
					<tr class="table100-head">
						<th class="column2">NO</th>
						<th class="column1">Nama</th>
						<th class="column3">NIM</th>
						<th class="column4">Jurusan</th>
						<th class="column5">Mata Kuliah</th>
						<th class="column6">Aksi</th>
					</tr>	
					</thead>
					<tbody>
					<?php
						include 'koneksi.php';
						$no = 1;
						$data = mysqli_query($koneksi, "SELECT * from s1_kemahasiswaan");
						while($d = mysqli_fetch_array($data)){
					?>		
						<tr>
							<td class="column2"><?php echo $no++; ?></td>
							<td class="column1"><?php echo $d['nama']; ?></td>
							<td class="column3"><?php echo $d['nim']; ?></td>
							<td class="column4"><?php echo $d['jrs']; ?></td>
							<td class="column5"><?php echo $d['matkul']; ?></td>
							<td class="column6"><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> |
							<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<br>
			</div>
		</div>
	</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>