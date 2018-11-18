<?php
include ('koneksi.php');

	$uname = $_GET['username'];
    $sql = "DELETE FROM akun WHERE username = '$uname'";
    $delete = mysqli_query($conn, $sql);
    echo '<script type="text/javascript">
        alert("Berhasil Hapus User"); 
        window.location.href="pageadmin.php";
    </script>';	

?>