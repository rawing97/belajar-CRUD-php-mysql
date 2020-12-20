<?php
	include_once 'koneksi.php';
	$sql = 'SELECT * FROM db_peminjam WHERE nim ORDER BY tanggal ASC';
	$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA PEMINJAM BUKU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="gambar/index.png">
	<h1>DATA PEMINJAM BUKU PERPUSTAKAAN</h1>
	<div class="href">
		<button style="font-size: 20px;"><a href="tambah_data.php">TAMBAH DATA PEMINJAM</a></button>
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
			<th>Aksi</th>
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
			<td>
				<a href="update.php?nim=<?php echo $row['nim'];?>" onclick="return confirm('Lanjut mengedit data <?php echo $row['nama'];?>')">Update</a> / 
				
				<a href="delete.php?nim=<?php echo $row['nim'];?>" onclick="return confirm('Apakah anda ingin menghapus data atas Nama : <?php echo $row['nama'];?> dengan NIM = <?php echo $row['nim'];?>...? ');">Delete</a>
			</td>
		</tr>
		<?php $no++ ?>
		<?php endwhile; ?>

	</table>
	</div>
</body>
</html>

