<?php 
include ('koneksi.php');
include ('proseslogin.php');

	if (login_check() == 1) {
		session_destroy();
		echo "<script>
		location.href='index.php';
		</script>";
		return true;
	} else {
	echo "<script>alert('Logout Gagal')</script>";
	return false;
	}