<?php
	include_once 'koneksi.php';
	$sql = 'SELECT * FROM db_peminjam';
	$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA PEMINJAM BUKU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="index.png">
	<h1>DATA PEMINJAM BUKU PERPUSTAKAAN</h1>
	<div class="href">
		<button><a href="tambah_data.php">TAMBAH DATA PEMINJAM</a></button>
	</div>
	<div class="table">
		<table border="1" ; cellpadding="10" ; cellspacing="0" ;>
		<tr style="background-color: green;">
			<th>No.</th>
			<th>Tanggal</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Nama Buku</th>
			<th>Kelas</th>
		</tr>
	<?php $no = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($result)):?>	
		<tr>
			<td><?php echo $no ?> </td>
			<td><?php echo $row['tanggal'];?> </td>
			<td><?php echo $row['nim'];?> </td>
			<td><?php echo $row['nama'];?> </td>
			<td><?php echo $row['nama_buku'];?> </td>
			<td><?php echo $row['kelas'];?> </td>
		</tr>
		<?php $no++ ?>
		<?php endwhile; ?>

	</table>
	</div>
</body>
</html>

