<?php
	include('koneksi.php');

	//delete transaksi
	if(isset($_POST['del_t'])){
		$id_t = $_POST['id_m'];
		$hal_t = $_POST['hal_t'];
		$delete = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_t'");
		if($hal_t == 'BASIC'){
			echo '<script type="text/javascript">
                alert("Berhasil Hapus/Batalkan Transaksi");
                window.location.href="transaksiuser.php";
            </script>';
		}
		else{
			echo '<script type="text/javascript">
                alert("Berhasil Hapus/Batalkan Transaksi");
                window.location.href="managetransaksi.php";
            </script>';
		}
	}

	//bayar cash
	if(isset($_POST['c0'])){
		$id_u = $_POST['id_u'];
		$id_m = $_POST['id_m'];
		//start_auto id
		$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS last FROM transaksi");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 1);
			$inr++;
			$id = "t".sprintf("%011s", $inr);
			$insert = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, tgl_transaksi, jml_cicilan, jenis_pembayaran, status_transaksi, id_user, id_meubel, id_sparepart) VALUES ('$id', CURRENT_DATE, 0, 'cash', 'lunas', '$id_u', '$id_m', '-')");
		//end_auto id
		echo '<script type="text/javascript">
                alert("Berhasil Melakukan Transaksi");
                window.location.href="index.php";
            </script>';
	}

	//bayar cicilan 6x
	if(isset($_POST['c6'])){
		$id_u = $_POST['id_u'];
		$id_m = $_POST['id_m'];
		$h_m = $_POST['h_m'];
		//start_auto id
		$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS last FROM transaksi");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 1);
		$inr++;
		$id = "t".sprintf("%011s", $inr);
		$insert = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, tgl_transaksi, jml_cicilan, jenis_pembayaran, status_transaksi, id_user, id_meubel, id_sparepart) VALUES ('$id', CURRENT_DATE, 6, 'cicilan', 'belum', '$id_u', '$id_m', '-')");
		$cicilan = $h_m/6;
		if($cicilan%1000 != 0){
			$up = $cicilan%1000;
			$up = 1000 - $up;
			$cicilan = $cicilan + $up;
		}
		$insert_c = mysqli_query($conn, "INSERT INTO cicilan (id_transaksi, cicilan) VALUES('$id', $cicilan)");
		//end_auto id
		echo '<script type="text/javascript">
                alert("Berhasil Melakukan Transaksi");
                window.location.href="index.php";
            </script>';
	}

	//bayar cicilan 10x
	if(isset($_POST['c10'])){
		$id_u = $_POST['id_u'];
		$id_m = $_POST['id_m'];
		$h_m = $_POST['h_m'];
		//start_auto id
		$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS last FROM transaksi");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 1);
		$inr++;
		$id = "t".sprintf("%011s", $inr);
		$insert = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, tgl_transaksi, jml_cicilan, jenis_pembayaran, status_transaksi, id_user, id_meubel, id_sparepart) VALUES ('$id', CURRENT_DATE, 10, 'cicilan', 'belum', '$id_u', '$id_m', '-')");
		$cicilan = $h_m/10;
		if($cicilan%1000 != 0){
			$up = $cicilan%1000;
			$up = 1000 - $up;
			$cicilan = $cicilan + $up;
		}
		$insert_c = mysqli_query($conn, "INSERT INTO cicilan (id_transaksi, cicilan) VALUES('$id', $cicilan)");
		//end_auto id
		echo '<script type="text/javascript">
                alert("Berhasil Melakukan Transaksi");
                window.location.href="index.php";
            </script>';
	}

	//bayar cicilan 15x
	if(isset($_POST['c15'])){
		$id_u = $_POST['id_u'];
		$id_m = $_POST['id_m'];
		$h_m = $_POST['h_m'];
		//start_auto id
		$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS last FROM transaksi");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 1);
		$inr++;
		$id = "t".sprintf("%011s", $inr);
		$insert = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, tgl_transaksi, jml_cicilan, jenis_pembayaran, status_transaksi, id_user, id_meubel, id_sparepart) VALUES ('$id', CURRENT_DATE, 15, 'cicilan', 'belum', '$id_u', '$id_m', '-')");
		$cicilan = $h_m/15;
		if($cicilan%1000 != 0){
			$up = $cicilan%1000;
			$up = 1000 - $up;
			$cicilan = $cicilan + $up;
		}
		$insert_c = mysqli_query($conn, "INSERT INTO cicilan (id_transaksi, cicilan) VALUES('$id', $cicilan)");
		//end_auto id
		echo '<script type="text/javascript">
                alert("Berhasil Melakukan Transaksi");
                window.location.href="index.php";
            </script>';
	}

	//lunasi cicilan (blom)
?>