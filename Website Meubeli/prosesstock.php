<?php
	include 'koneksi.php';
	
	if (isset($_POST['stock'])) {
		$req = $_POST['req'];
		$tgl = $_POST['date'];
		$query = mysqli_query($conn, "SELECT MAX(id_stock) AS last FROM stock");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 2);
		$inr++;
		$id = "ST".sprintf("%03s", $inr);
		$sql = mysqli_query($conn,"INSERT INTO stock(id_stock, request, tanggal, status) VALUES ('$id', '$req', '$tgl', 'dipesan')");
		if ($sql) {
			echo "<script>alert('Request Berhasil')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		} else {
			echo "<script>alert('Request Gagal')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		}
	}

	if(isset($_GET['done'])){
		$ids = $_GET['done'];
		$query = mysqli_query($conn, "SELECT * FROM stock WHERE id_stock = '$ids'");
		while($data = mysqli_fetch_array($query)){
			$req = $data['request'];
		}
		$query1 = mysqli_query($conn, "UPDATE stock SET id_stock='$ids' , request='$req', tanggal=CURRENT_DATE, status='diterima' WHERE id_stock = '$ids'");
		if ($query1) {
			echo "<script>alert('Request Diterima')</script>";
			echo "<script>location.href='pagesupplier.php'</script>";
		} else {
			echo "<script>alert('Request Gagal Diterima')</script>";
			echo "<script>location.href='pagesupplier.php'</script>";
		}
	}
	?>