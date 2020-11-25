<?php
	include_once 'koneksi.php';

	if (isset($_POST['submit']))
	 {
		$tanggal = $_POST ['tanggal'];
		$nim = $_POST ['nim'];
		$nama = $_POST ['nama'];
		$buku = $_POST ['nama_buku'];
		$kelas = $_POST ['kelas'];

	$query = "INSERT INTO db_peminjam
			VALUES ('$tanggal','$nim','$nama','$buku','$kelas') ";



	$result = mysqli_query ($conn,$query);

	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda tambahkan');
				document.location.href = 'index.php';
			</script>



		";
	}else{
		echo "data gagal di input";
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA PEMINJAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="index.png">

	<h1>MENAMBAHKAN DATA MAHASISWA PEMINJAM BUKU</h1>
	<div class="form">
	<form method="POST" action="tambah_data.php">
		<table border="1" ; cellspacing="0"; cellpadding="10";>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal" required></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td>:</td>
				<td><input type="text" name="nama_buku" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" required></td>
			</tr>
			
		</table>
	<button type="submit" name="submit">TAMBAHKAN DATA PEMINJAM</button>
			

	</form>
	</div>
</body>
</html>