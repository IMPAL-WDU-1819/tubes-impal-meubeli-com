<?php
    include ('koneksi.php');

    if (isset($_POST['edit_user'])) {
    	$uname = $_POST['uname'];	
        $passwd = $_POST['passwd'];
    	$nama = $_POST['nama'];
        $email = $_POST['email'];
    	$hak = $_POST['hak'];
    	$sql = "UPDATE akun SET username = '$uname' , password = '$passwd' ,nama = '$nama', email = '$email', hak = '$hak' WHERE username = '$uname'";
    	$update = mysqli_query($conn, $sql);
        echo '
        <script type="text/javascript">
            alert("Berhasil Update User");
            window.location.href="pageadmin.php";
        </script>';
    }

    if (isset($_POST['edit'])) {
        $uname = $_POST['uname'];   
        $passwd = $_POST['passwd'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $hak = $_POST['hak'];
        $sql = "UPDATE akun SET username = '$uname' , password = '$passwd' ,nama = '$nama', email = '$email', hak = '$hak' WHERE username = '$uname'";
        $update = mysqli_query($conn, $sql);
        echo '
        <script type="text/javascript">
            alert("Berhasil Update User");
            window.location.href="pageuser.php";
        </script>';
    }
?>