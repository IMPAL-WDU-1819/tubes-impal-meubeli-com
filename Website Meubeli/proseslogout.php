<?php 
include ('koneksi.php');
include ('proseslogin.php');

	if (login_check() == 1) {
		session_destroy();
		echo "<script>
		location.href='index.php';
		alert('Sampai Jumpa Lagi :)');
		</script>";
		return true;
	} else {
	echo "<script>alert('Logout Gagal')</script>";
	return false;
	}