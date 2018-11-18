<?php
include ('koneksi.php');
	if (isset($_POST['del_user'])) {
		$uname = $_GET['username'];
	    $sql = "DELETE FROM akun WHERE username = '$uname'";
	    $delete = mysqli_query($conn, $sql);
	    echo '<script type="text/javascript">
	        alert("Berhasil Hapus User"); 
	        window.location.href="pageadmin.php";
	    </script>';	
	} else {
		echo '<script type="text/javascript">
	        window.location.href="pageadmin.php";
	    </script>';	
	}


?>