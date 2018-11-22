<?php
  include "koneksi.php";
  include "proseslogin.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start of Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo2-12.png" width="200" height="58" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="custom.php">Custom</a></li>
            <?php
            if(login_hak() == 'ADMIN'){
            ?>
              <li class="nav-item"> <a class="nav-link" href="pagestock.php">Stock</a></li>
            <?php } ?>
            <li class="nav-item"> <a class="nav-link" href="About.php">About Us</a></li>
          </ul>
          <ul class="navbar-nav ">
            <?php
              if(login_check()){
                if(login_hak() == 'ADMIN'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            <li class="nav-item"><a class="nav-link" href="pageadmin.php">Manage User</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="managetransaksi.php">Manage Transaksi</a>
            </li>
            <?php
                }
                else if(login_hak() == 'BASIC'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="transaksiuser.php">Transaksi-ku</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="cicilanuser.php">Cicilan-ku</a>
            </li>
            <?php
                }
                else if(login_hak() == 'SUPPLIER'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="pagesupplier.php">Stock Request</a></li>
            <?php
                }
            ?>
            <li class="nav-item"> <a class="nav-link" href="proseslogout.php">Logout</a></li>
            <?php
              }
              else{
            ?>
            <li class="nav-item active"> <a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">atau</a></li>
            <li class="nav-item active"> <a class="nav-link" href="Signup.php">Sign up</a></li>
            <?php
              }
            ?>
        </div>
      </div>
    </nav>
    <div class="container" style="margin: 4%; margin-right: auto; margin-left: auto;">
      <?php
      if(login_check() && login_hak() == 'ADMIN'){
    ?>
      <div class="card text-center col-md-4 offset-lg-4 col-lg-4">
        <div class="card-header"> EDIT USER <?php echo $_GET['nama']; ?></div>
        <div class="card-body">
          <?php
            $un = $_GET['username'];
            $sql = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$un'");
            $no = 0;
            $data = mysqli_fetch_array($sql);
            $no++;
            $passwd = $data['password'];
            $nama = $data['nama'];
            $email = $data['email'];
            $hak = $data['hak'];
          ?>
          <form action="prosesedit.php?=username" method="POST">
            <div class="form-group">
            NAMA
            <input type="name" class="form-control" id="nama" name="nama"  value="<?php echo($nama) ?>">
            </div>
            <div class="form-group">
            EMAIL
            <input type="email" class="form-control" id="email" name="email" value="<?php echo($email) ?>">
            </div>
            <div class="form-group">
            USERNAME
            <input type="text" class="form-control" id="uname" name="uname" value="<?php echo($un) ?>" readonly>
            </div>
            <div class="form-group">
            PASSWORD
            <input type="password" class="form-control" id="passwd" name="passwd" value="<?php echo($passwd) ?>">
            </div>
            <div class="form-group">
            HAK
            <input type="text" class="form-control" id="hak" name="hak" value="<?php echo($hak) ?>">
            </div>
            <button type="submit" name="edit_user" class="btn btn-primary">Edit</button>
          </form>
        </div>
        <?php
       }
        else{
          echo '<script type="text/javascript">
                alert("Hanya Admin yang bisa mengakses halaman ini");
                window.location.href="index.php";
            </script>';
        }
       ?>
        <div class="card-footer text-muted"> Copyright © Meubeli. All rights reserved. </div>
      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>
