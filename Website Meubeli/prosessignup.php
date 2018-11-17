<?php
include 'koneksi.php';

if (isset($_POST['signup'])) {
	$uname = $_POST['uname'];
	$passwd = $_POST['passwd'];
	$email = $_POST['email'];
	$nama = $_POST['nama'];

	$sql = mysqli_query($conn,"INSERT INTO akun(username, password, nama, email, hak) VALUES ('$uname', '$passwd', '$nama', '$email', 'REGULAR' )");

	if ($sql) {
		echo "<script>alert('Signup Berhasil')</script>";
		echo "<script>location.href='Signup.php'</script>";
	} else {
		echo "<script>alert('Signup Gagal')</script>";
		echo "<script>location.href='Signup.php'</script>";
	}
}
?>