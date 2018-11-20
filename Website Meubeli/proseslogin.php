<?php
	include "koneksi.php";

if (isset($_POST['login'])) {
	$uname = $_POST['uname'];
	$passwd = $_POST['passwd'];

	$sql = "SELECT * FROM akun WHERE username = '$uname' and password = '$passwd' ";
	$view = mysqli_query($conn, $sql);

	$cek = mysqli_num_rows($view);

	if ($cek >=1) {
		while($data = mysqli_fetch_array($view)) {

			login_session();
			$_SESSION['username'] = $uname;
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['hak'] = $data['hak'];

		}
		echo "<script>alert('Login Berhasil')</script>";
		echo "<script>location.href='index.php'</script>";

	}
	else{
		echo "<script>alert('Username atau Password Salah')</script>";
		echo "<script>location.href='login.php'</script>";
	}
}

function login_session() {

	@session_name('MEUBELI');
	@session_start();
	return $_SESSION;
}

function login_check() {

	login_session();
	if (isset($_SESSION['username'])) {
		return true;
	}
	return false;
}

function login_hak() {

	if (login_check()) return $_SESSION['hak'];
	return null;
}


function login_nama() {

	if (login_check()) return $_SESSION['nama'];
	return null;
}


function login_uname() {

	if (login_check()) return $_SESSION['username'];
	return null;
}

function logout() {

	if (isset($_GET['logout']) && login_check()) {
		session_destroy();
		return true;
	}
	return false;
}
?>