<?php
	include('koneksi.php');

	//delete transaksi
	if(isset($_POST['del_t'])){
		$id_t = $_POST['id_m'];
		$hal_t = $_POST['hal_t'];
		$query1 = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi = '$id_t'");
		while ($data1 = mysqli_fetch_array($query1)) {
			$id_mc = $data1['id_meubel'];
		}
		$delete = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_t'");
		$delete1 = mysqli_query($conn, "DELETE FROM custom WHERE id_custom = '$id_mc'");
		$delete2 = mysqli_query($conn, "DELETE FROM cicilan WHERE id_transaksi = '$id_t'");
		if($hal_t == 'BASIC'){
			echo '<script type="text/javascript">
                alert("Berhasil Batalkan Transaksi");
                window.location.href="transaksiuser.php";
            </script>';
		}
		else{
			echo '<script type="text/javascript">
                alert("Berhasil Hapus Transaksi");
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

	//lunasi cicilan
	if(isset($_POST['bc'])){
		$id_t = $_POST['id_t'];
		$h_m = $_POST['h_m'];
		$c = $_POST['c'];

		$queryT = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi = '$id_t'");
		while($dataT = mysqli_fetch_array($queryT)){
			$tgl = $dataT['tgl_transaksi'];
			$j_c = $dataT['jml_cicilan'];
			$s_t = $dataT['status_transaksi'];
			$id_u = $dataT['id_user'];
			$id_m = $dataT['id_meubel'];
			$id_s = $dataT['id_sparepart']; 
		}
		$lc = $h_m/$j_c;
		if($lc%1000 != 0){
			$up = $lc%1000;
			$up = 1000 - $up;
			$lc = $lc + $up;
		}
		$c = $c + $lc;
		$updateC = mysqli_query($conn, "UPDATE cicilan SET id_transaksi ='$id_t', cicilan=$c WHERE id_transaksi = '$id_t'");
		if($c >= $h_m){
			$s_t = 'lunas';
		}
		$updateT = mysqli_query($conn, "UPDATE transaksi SET id_transaksi='$id_t', tgl_transaksi=CURRENT_DATE, jml_cicilan=$j_c, jenis_pembayaran='cicilan', status_transaksi='$s_t', id_user='$id_u', id_meubel='$id_m', id_sparepart='$id_s' WHERE id_transaksi = '$id_t'");
		echo '<script type="text/javascript">
                alert("Berhasil Membayar Cicilan");
                window.location.href="index.php";
            </script>';
	}

	//bayar custom cash
	if(isset($_POST['cc0'])){
		$id_mc = $_POST['id_mc'];
		$id_uc = $_POST['id_uc'];
		$h_mc = $_POST['h_mc'];
		//start_auto id
		$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS last FROM transaksi");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 1);
		$inr++;
		$id = "t".sprintf("%011s", $inr);
		//
		$query1 = mysqli_query($conn, "SELECT MAX(id_custom) AS last FROM custom");
		$data1 = mysqli_fetch_array($query1);
		$last1 = $data1['last'];
		$inr1 = (int)substr($last1, 1);
		$inr1++;
		$id_mc = $id_mc.sprintf("%09s", $inr1);
		//
		$insert1 = mysqli_query($conn, "INSERT INTO custom (id_custom, harga) VALUES ('$id_mc', $h_mc)");
		$insert = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, tgl_transaksi, jml_cicilan, jenis_pembayaran, status_transaksi, id_user, id_meubel, id_sparepart) VALUES ('$id', CURRENT_DATE, 0, 'cash', 'lunas', '$id_uc', '$id_mc', '-')");
		//end_auto id
		echo '<script type="text/javascript">
                alert("Berhasil Melakukan Transaksi");
                window.location.href="index.php";
            </script>';
	}
?>