<?php
	include_once 'koneksi.php';

	$nim = $_GET["nim"];

	$mhs=mysqli_query($conn,"SELECT * FROM db_peminjam WHERE nim = $nim ");


	if (isset($_POST['submit']))
	 {
	 	$tanggal = $_POST ['tanggal'];
		$nim = $_POST ['nim'];
		$nama = $_POST ['nama'];
		$buku = $_POST ['nama_buku'];
		$kelas = $_POST ['kelas'];

		$query = "UPDATE db_peminjam SET tanggal = '$tanggal', nim = $nim, nama = '$nama', nama_buku= '$buku', kelas = '$kelas' WHERE nim = '$nim' ";

		$result=mysqli_query($conn,$query);

		
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda ubah');
				document.location.href = 'index.php';
			</script>



		";
	}else{
		echo "data gagal di ubah";
		}

	}

	include_once 'update.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA PEMINJAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="gambar/index.png">

	<h1>MENGUBAH DATA MAHASISWA PEMINJAM BUKU</h1>
	<div class="form">
	<form method="POST" action=" ">

		<table border="1" ; cellspacing="0"; cellpadding="10";>
			<?php while ($row = mysqli_fetch_assoc($mhs)): ?>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td> <input type="date" name="tanggal" value="<?php echo $row['tanggal'];?>" ></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="hidden" name="nim" value="<?php echo $row['nim'];?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td> <input type="text" name="nama" value="<?php echo $row['nama'];?>" ></td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td>:</td>
				<td><input type="text" name="nama_buku" value="<?php echo $row['nama_buku'];?>" ></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"  value="<?php echo $row['kelas'];?>"></td>
			</tr>
			<?php endwhile; ?>
		</table><br>
	<button type="submit" name="submit">EDIT DATA PEMINJAM</button>
			

	</form>
	</div>
</body>
</html>   