<?php
	 
	 include 'koneksi.php';

	 $nim = $_GET['nim'];
	 $query = "DELETE FROM db_peminjam WHERE nim = $nim";
	 $result = mysqli_query ($conn,$query);
	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda hapus');
				document.location.href = 'index.php';
			</script>



		";
		}else{
			echo "data gagal di hapus";
		}


  // header('location: index.php');

 	
 ?>