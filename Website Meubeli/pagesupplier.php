<?php 
include('koneksi.php');
include('proseslogin.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Supplier</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  </head>
  <body>
<?php 
        if ('<?php echo($loginStatus) ?>' == 'GAGAL') alert('Username atau password anda salah!');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo2-12.png" width="200" height="58" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="Custom.php">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
          </ul>
          <ul class="navbar-nav ">
            <?php
              if(login_check()){
                if(login_hak() == 'ADMIN'){
            ?>
            <li class="nav-item acive"><a class="nav-link" href="pageadmin.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <?php
                }
                else if(login_hak() == 'BASIC'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
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
          </ul>
        </div>
      </div>
    </nav>
<hr>
<h2 class="text-center">STOCK MANAGEMENT</h2>
<br />
<div class="container">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID Stock</th>
        <th scope="col">Request Stock</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = mysqli_query($conn, "SELECT * FROM stock");
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
        $no++;
        $ids =  $data['id_stock'];
        $req = $data['request'];
        $tgl = $data['tanggal'];
      ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $ids; ?></td>
          <td><?php echo $req; ?></td>
          <td><?php echo $tgl; ?></td>
          <td><button type="button" class="btn btn-warning"><a href="#" style="text-decoration: none; color: white;">Selesai</a></button></td>
        </tr>
      <?php } ?>  
    </tbody>
  </table>
</div>
<hr>
<hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
          <strong>MyStoreFront, Inc.</strong><br>
MEUBELI<br>
Quitman, WA, 99110-0219<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
          <strong>CEO</strong><br>
          <a href="mailto:#">ceo@gmail.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Meubeli. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>