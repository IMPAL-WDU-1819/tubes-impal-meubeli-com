<?php
	include 'koneksi.php';
	
	if (isset($_POST['stock'])) {
		$req = $_POST['req'];
		$tgl = $_POST['date'];
<<<<<<< HEAD
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

=======
		$query = mysqli_query($conn, "SELECT MAX(id_stock) AS last FROM stock");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 2);
		$inr++;
		$id = "ST".sprintf("%03s", $inr);
		$sql = mysqli_query($conn,"INSERT INTO stock(id_stock, request, tanggal, status) VALUES ('$id', '$req', '$tgl', 'dipesan')");
>>>>>>> 75668a0a6626fce582cd04a211a4ac106be1a5e3
		if ($sql) {
			echo "<script>alert('Request Berhasil')</script>";
			echo "<script>location.href='pagestock.php'</script>";
		} else {
			echo "<script>alert('Request Gagal')</script>";
			//echo "<script>location.href='pagestock.php'</script>";
		}
	}

<<<<<<< HEAD

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
=======
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
>>>>>>> 75668a0a6626fce582cd04a211a4ac106be1a5e3
