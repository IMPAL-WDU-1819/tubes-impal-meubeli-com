<?php
	include 'koneksi.php';
	
	if (isset($_POST['stock'])) {
		$req = $_POST['req'];
		$tgl = $_POST['date'];
		$no = 0;
		$id = 'ST'.$no;

		//cek id

		$select = "SELECT * FROM stock";
		$view = mysqli_query($conn, $select);
		$cek = mysqli_num_rows($view);
		if ($cek == 0) {
			$id = $id;
		} else {
			while($data = mysqli_fetch_array($view)) {
				$idc = $data['id_stock'];
				if ($id == $idc) {
					$no++;
					$id = 'ST'.$no;
				}
			}
		}

		$sql = mysqli_query($conn,"INSERT INTO stock(id_stock, request, tanggal, status) VALUES ('$id', '$req', '$tgl', 'PENDING')");

		if ($sql) {
			echo "<script>alert('Request Berhasil')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		} else {
			echo "<script>alert('Request Gagal')</script>";
			//echo "<script>location.href='pagestock.php'</script>";
		}
	}


	//ganti status
	$ids = $_GET['id_stock'];
	$sql0 = "SELECT * FROM stock WHERE id_stock = '$ids'";
	$select = mysqli_query($conn, $sql0);
	$data = mysqli_fetch_array($select);
	$req = $data['request'];
	$tgl = $data['tanggal'];

	$sql = "UPDATE stock SET id_stock ='$ids', request = '$req', tanggal = '$tgl', status = 'SELESAI' WHERE id_stock = '$ids'";
	$done = mysqli_query($conn, $sql);
	echo '
    <script type="text/javascript">
        window.location.href="pagesupplier.php";
    </script>';


?>