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
    <title>About Us</title>
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
            <li class="nav-item active"> <a class="nav-link" href="#">About Us</a></li>
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
    <!--End of Navbar -->
    <!-- Start of our motto -->
    <div class="container" style="margin-top: 3px;">
      <h3 style="text-align: center; font-family: Georgia, serif; color: #003366;"> We Provide Furniture. </h3>
      <h3 style="text-align: center; font-family: Georgia, serif;  color: #003366;"> For your home. For your family.</h3>
      <p style="text-align: center; font-family: Georgia, serif; color: #003366;">A good house has high quality of furniture. By buying our furnitures. Make a comfortable place to gather. </p>
    </div>
    <!-- End of our motto -->
    <!-- Start of Pict -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <img class="d-block w-100" src="images/living-heading-1920x500.jpg">
        </div>
    </div>
    <!-- End of Pict -->
    <hr>
    <div class="container">
      <div class="row"> 
        <div class="col-sm-8">
          <h4> About Us </h4>
            <p style="text-align: justify;"> Meubeli comes as a service provider of furniture to increase family comfort. Present in different packaging not only provides furniture that is always available but also provides custom features for our prospective customers later. By carrying the slogan "We provide furniture. For your home. For your family". We strive to be the best in service and provide the highest quality furniture for the satisfaction of our customers. </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li>
                  <h5>Categories</h5>
                </li>
                <li class="btn-link"> <a href="category.php?cat=chair" style="color: dimgrey">Chair</a></li>
                <li class="btn-link"> <a href="category.php?cat=table" style="color: dimgrey">Table</a></li>
                <li class="btn-link"> <a href="category.php?cat=cupboard" style="color: dimgrey">Cupboard</a></li>
                <li class="btn-link"> <a href="category.php?cat=shelf" style="color: dimgrey">Shelf</a></li>
                <li class="btn-link"> <a href="category.php?cat=bed" style="color: dimgrey">Bed</a></li>
                <li class="btn-link"> <a href="category.php?cat=set" style="color: dimgrey">Furniture</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li>
                  <h5>Payment</h5>
                </li>
                <li class="btn-link"> <a style="color: grey">Cash</a></li>
                <li class="btn-link"> <a style="color: grey">Installments</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12"><img src="images/PCI.png" style="width: 160px">
              <ul class="list-unstyled">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6"><img src="images/logo2-12.png" style="width: 260px">
          <address>
            <strong><a href="index.php">www.Meubeli.com</a></strong><br>
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