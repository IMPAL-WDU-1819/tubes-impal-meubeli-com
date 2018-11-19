<?php
	include 'koneksi.php';
	
	if (isset($_POST['stock'])) {
		$req = $_POST['req'];
		$tgl = $_POST['date'];
		$sql = mysqli_query($conn,"INSERT INTO stock(id_stock, request, tanggal) VALUES ('ST1', $req', '$tgl')");

		if ($sql) {
			echo "<script>alert('Request Berhasil')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		} else {
			echo "<script>alert('Request Gagal')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		}
	}
	?>